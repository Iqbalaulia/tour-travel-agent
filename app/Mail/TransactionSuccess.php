<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TransactionSuccess extends Mailable
{
    use Queueable, SerializesModels;
    
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // nomads nama pengirim
        return $this
        ->from('belajarku@koding.com','NOMADS')
        ->subject('Tiket Nomads Anda')
        ->view('email.transaction-success');
    }
}
