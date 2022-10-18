<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use App\Models\Product;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request){
        $contact = ContactForm::all();
        return view('contact');
    }
    public function store(Request $request)
    {
        $data = $request->except(['_token','subject']);

        ContactForm::create([
            'subject'=>$request->subject,
            'content'=>json_encode($data)
        ]);
        return redirect()->route('products');
    }

    public function show($id){
        $contact= ContactForm::findOrFail($id);
        return view('authenticated.contact.see')->with(compact('contact'));

    }

    public function storeBKR(Request $request){
        $data = $request->except(['_token','subject']);

        ContactForm::create([
            'subject'=>$request->subject,
            'content'=>json_encode($data)
        ]);
        return redirect()->route('dashboard');
    }
}
