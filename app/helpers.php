<?php

use App\Mail\ConfirmationDemandeMail;
use App\Mail\ContactMail;
use App\Mail\ReservationMail;
use App\Models\DemandeActions;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

if (!function_exists('reformat_text_option')) {
    function reformat_text_option($text)
   {
      $text = str_replace("_"," ",$text);
      return ucfirst($text);
   }
}

if (!function_exists('save_demande_action')) {
    function save_demande_action($user_id, $demande_id, $label, $color)
   {
      $demande_action = new DemandeActions();
      $demande_action->user_id = $user_id;
      $demande_action->demande_id = $demande_id;
      $demande_action->label = $label;
      $demande_action->color = $color;
      $demande_action->save();
   }
}
if (!function_exists('date_to_fr')) {
   function date_to_fr($date)
   {
       $retour = "";
       if (!empty($date)) {
           $retour = date('d/m/Y', strtotime($date));
       }
       return $retour;
   }
}
if (!function_exists('setupFlash')) {
   function setupFlash( $message, $type)
   {
       Session::flash('swal_msg', [
           
           'message' => $message,
           'type' => $type,
       ]);
   }
}

if (!function_exists('reformat_price')) {
   function reformat_price($price)
  {
     return number_format($price, 0, ',', ' ');
  }
}
if (!function_exists('sendEmailReservation')) {
   function sendEmailReservation($email, $body, )
  {
     
       $emails_cc = get_emails_cc();
       Mail::to($email)->bcc($emails_cc)->send(new ReservationMail($body));
       smilify('Envoyé', "Le mail d'invitation vous a été envoyé avec succès");

       return back()->with('status','Mail envoyé avec succès');
  }
}
if (!function_exists('sendEmailConfirmation')) {
   function sendEmailConfirmation($demande )
  {
     
       $emails_cc = get_emails_cc();
       Mail::to($demande->email)->bcc($emails_cc)->send(new ConfirmationDemandeMail($demande));
       //smilify('Envoyé', "Le mail d'invitation vous a été envoyé avec succès");

       return back()->with('status','Mail envoyé avec succès');
  }
}
if (!function_exists('sendEmailContact')) {
   function sendEmailContact( $body )
  {
      $email = 'libassediop32@gmail.com';
      $emails_cc = get_emails_cc();
      Mail::to($email)->bcc($emails_cc)->send(new ContactMail($body));

      return back()->with('status','Mail envoyé avec succès');
  }
}
if (!function_exists('get_emails_cc')) {
   function get_emails_cc()
   {
       return['libassediop32@gmail.com'];
       return ['libassediop32@gmail.com' , 'dwrbassirou@gmail.com', 'ablaye78@gmail.com'];
   }
}
