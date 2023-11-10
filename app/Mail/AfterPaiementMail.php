<?php
 
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
 
class AfterPaiementMail extends Mailable
{
    use Queueable, SerializesModels;
 
    public $body;
    public $password;
 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($body, $password)
    {
        $this->body = $body;
        $this->password = $password;
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.mail-after-paiement')->subject('Votre demande a été bien effectué')->with(['demande'=>$this->body, 'password'=>$this->password]);
    }
}
 