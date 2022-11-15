<?php

namespace App\Http\Controllers;

use App\Mail\offerContractMail;
use App\Models\Company;
use App\Models\ContactForm;
use App\Models\leasecontract;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mailSend(Request $request)
    {
        Mail::to('thomasbro312@gmail.com')->send(new offerContractMail());


        return back();
    }
}

