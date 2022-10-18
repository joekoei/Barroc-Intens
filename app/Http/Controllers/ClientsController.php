<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

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
}
