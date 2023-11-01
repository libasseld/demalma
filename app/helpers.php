<?php

use App\Mail\ContactMail;
use App\Mail\ReservationMail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

if (!function_exists('reformat_text_option')) {
    function reformat_text_option($text)
   {
      $text = str_replace("_"," ",$text);
      return ucfirst($text);
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
   function setupFlash($title, $message, $type)
   {
       Session::flash('swal_msg', [
           'title' => $title,
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
