<?php

namespace App\Http\Controllers;

use App\Mail\offerContractMail;
use App\Models\Company;
use App\Models\ContactForm;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mailSend(Request $request)
    {
        $contactForm = ContactForm::where('id' == '1');
        $email = 'devbyte@dev.nl';

        Mail::to($email)->send(new offerContractMail());


        return back();
    }
}

