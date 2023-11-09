<?php

namespace App\Http\Controllers;

use App\Mail\PaiementValideMail;
use App\Models\Commande;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use App\Mail\WelcomeMail;
use App\Models\Demande;
use App\Models\Role;
use Illuminate\Support\Arr;

require('paytech_php/PayTech.php');

use Stripe\Checkout\Session;

class PaiementController extends Controller
{
    private $base_url;
    private $apiKey;
    private $apiSecret;

    public function __construct()
    {
        $this->apiKey     = "854a6ab0dd81effb12b0017b606c16dcf89dfd86b008d5aa197fb25ace8bf2cf";
        $this->apiSecret  = "e8cfe6a426e549544d15347397111ae7d92a3db015358195483e786811f22eef";
        $this->base_url  = "http://127.0.0.1:8000/";
    }

    public function paytech($demande_id)
    {
        $demande = Demande::with('offre')->find($demande_id);
        if (!empty($demande->offre) && !empty($demande->offre->montant)) {
            $postfields = array(
                "item_name"    => "Demande {$demande->offre->designation} à Demalma",
                "item_price"   =>   $demande->offre->montant,
                "currency"     => "xof",
                "ref_command"  =>  Str::random(18),
                "command_name" =>  $demande->offre->designation,
                "env"          =>  'test',
                "success_url"  =>   $this->base_url."/paiement-confirme/".$demande_id,
                "ipn_url"           =>  'https://demalma.webmasteragency.fr/',
                "cancel_url"   =>   $this->base_url."/annuler-paiement/".$demande_id,
                //"custom_field" =>   $customfield
            );
    
            $jsonResponse = $this->post('https://paytech.sn/api/payment/request-payment', $postfields, [
                "API_KEY: " . $this->apiKey,
                "API_SECRET: " . $this->apiSecret
            ]);
            $api_response = json_decode($jsonResponse, true);

            //dd($jsonResponse);

            if(isset($api_response['success']) && $api_response['success'] == 1){
                return Redirect::to($api_response['redirect_url']);

            }else{
                dd($demande);

                return redirect()->route('home');

            }
        }else{
            dd($demande);

            return redirect()->route('home');
        }

        

    }
    function post($url, $data = [], $header = [])
    {
        $strPostField = http_build_query($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $strPostField);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array_merge($header, [
            'Content-Type: application/x-www-form-urlencoded;charset=utf-8',
            'Content-Length: ' . mb_strlen($strPostField)
        ]));

        return curl_exec($ch);
    }
    public  function paiement_confirme($id){
        $demande  = Demande::find($id);
        if(!empty($demande)){
            $demande->paiement = 1;
            $demande->date_paiement = date('Y-m-d h:i:s');
            $demande->save();

            $user = User::where('email', $demande->email)->orWhere('phone', $demande->telephone)->first();
            $password = '';
            if(empty($user)){
                $password = Str::password(10);
                $user = new User();
                $user->prenom   = $demande->prenom;
                $user->nom      = $demande->nom;
                $user->email    = $demande->email;
                $user->role_id  = Role::where('code', 'usager')->first()->id;
                $user->phone    = $demande->phone;
                $user->name     = $demande->prenom." ".$demande->nom;
                $user->password = bcrypt($password);
                $user->save();
            }
            $demande->paiement = $user->id;

            $demande->save();

            if(empty($password)){
                $this->sendEmailOldUser($demande);
            }else{
                $this->sendEmailNewUser($demande, $password);
            }

            setupFlash("Paiement enregistré avec succès", "Votre paiement a été enregistré avec succès.Notre équipe se charge de votre réservation et vous contactera dans les prochaines heures.", 'succes');

            return redirect()->route('home');

        }
    }
    public  function annuler_paiement($id){
        $demande  = Demande::find($id);
        if(!empty($commande)){
            $demande->etat = 2;
            $demande->save();
            setupFlash("Réservation non confirmé", "Votre paiement a été annulé  pour certaines raisons. Si vous n'êtes pas l'auteur de cette annulation vous pouvez nous contacter. ", 'error');
            return redirect()->route('home');
        }
    }
    public function sendEmail($demande)
    {

        $email =  $demande->email;
 
        $body = [
            'name'      => $demande->name,
        ];
        $emails_cc = get_emails_cc();
        if(!empty($ambassadeur)){
            //array_push($emails_cc, $ambassadeur->email);
        }
        Mail::to($email)->bcc($emails_cc)->send(new PaiementValideMail($body));
        smilify('Envoyé', "Le mail d'invitation vous a été envoyé avec succès");

        return back()->with('status','Mail envoyé avec succès'); 
    }
}
