<?php

namespace App\Mail;

use App\Http\Controllers\LeasecontractsController;
use App\Models\leasecontract;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class offerContractMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    /**
     * @var \App\Models\Leasecontract
     */

    public $lease;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\Leasecontract $lease
     * @return void
     */

    public function __construct()
    {
        ;
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail',
        );
    }

    public function build()
    {
        return $this->markdown('Email.offerContractMail');
    }
}
