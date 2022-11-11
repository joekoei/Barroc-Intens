<?php

namespace App\Mail;

use App\Http\Controllers\LeasecontractsController;
use App\Models\ContactForm;
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
     * @var \App\Models\ContactForm
     */

    public $contactForm;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\ContactForm $contactForm
     * @return void
     */

    public function __construct()
    {
        $this->contactForm = ContactForm::where('id' == '1');
    }

    /**
     * @return $this
     */

    public function build()
    {
        $contactForm = ContactForm::all()->where('id','=',1)->first();
        return $this->subject('Offerte Barroc Intens')->markdown('Email.offerContractMail', compact('contactForm'));
    }
}
