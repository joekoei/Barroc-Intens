<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request){
        return view('contact');
    }
    public function store(Request $request)
    {
        $data = $request->except(['_token','subject']);

        new ContactForm([
            'subject'=>$request->subject,
            'content'=>json_encode($data)
        ]);
        return back();
    }

    public function storeBKR(Request $request){
        $data = $request->except(['_token','subject']);

        new ContactForm([
            'subject'=>$request->subject,
            'content'=>json_encode($data)
        ]);
        return back();
    }
}
