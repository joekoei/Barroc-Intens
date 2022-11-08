<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ClientsController extends Controller
{
    public function index(){
        $companies = Company::all();
        return view('authenticated.sales.clients')->with(compact('companies'));
    }

    public function client(User $user){
        return view('authenticated.sales.client')->with(compact('user'));
    }

    public function addNote(Request $request){
        $user = User::findOrFail($request->user_id);
        $notes = json_decode($user->notes,true);
        $notes[$request->note] = $request->note;
        $notes = json_encode($notes);

        $user->notes = $notes;
        $user->save();
        return back();
    }

    public function personalData(){
        return view('authenticated.customer.personalData');
    }

    public function personalDataEdit($id)
    {
        $user = User::findOrFail($id);
        return view('authenticated.customer.personalDataEdit')->with(compact('user'));
    }
    public function personalDataUpdate(Request $request,$id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return view('authenticated.customer.personalData')->with(compact('user'));
    }
}
