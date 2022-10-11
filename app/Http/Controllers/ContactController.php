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

        $cf = new ContactForm();
        $cf->subject = $request->subject;
        $cf->content = json_encode($data);
        $cf->save();
        return back();
    }
}
