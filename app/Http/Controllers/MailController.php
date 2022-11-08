<?php

namespace App\Http\Controllers;

use App\Mail\offerContractMail;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mailSend()
    {
        $email = 'devbyte@dev.nl';

        $mailInfo = [
            'title' => 'Hallo',
            'url' => 'https://youtube.com'
        ];

        Mail::to($email)->send(new offerContractMail($mailInfo));

        return response()->json([
            'message' => 'Mail has sent.'
        ], Response::HTTP_OK);
    }
}

