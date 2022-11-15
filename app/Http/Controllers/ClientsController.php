<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Invoice;
use App\Models\leasecontract;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;

class ClientsController extends Controller
{
    public function index(){
        $users = User::all();
        return view('authenticated.sales.clients.index')->with(compact('users'));

    }

    public function client(User $user){
        return view('authenticated.sales.clients.show')->with(compact('user'));
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

    public function create(){
        return view('authenticated.sales.clients.create');
    }

    public function store(Request $request){
        User::create([
            'name'=>$request->name,
            "email"=>$request->email,
            "password"=>Hash::make("tobesetupped"),
            "role_id"=>5,
            "notes"=>"{}",
            "token"=>Str::random(32)
        ]);
        // do emailing stuff and generating token for password-setup routes;
        return redirect()->route('klant.index');


    }

    public function personalData(){
        $user = Auth::user();
        return view('authenticated.customer.personalData')->with(compact('user'));
    }

    public function personalDataEdit()
    {
        $user = Auth::user();
        return view('authenticated.customer.personalDataEdit')->with(compact('user'));
    }
    public function personalDataUpdate(Request $request,$id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect(route('personal.data'))->with(compact('user'));
    }

    public function personalLeaseContract(){
        $lease = leasecontract::all();
        $company = Company::all()->where('contact_id','=',Auth::user()->id)->first();
        return view('authenticated.customer.personalLeaseContract')->with(compact('lease', 'company'));
    }
    public function personalInvoice(){
        $invoices = Invoice::all();
        $company = Company::all()->where('contact_id','=',Auth::user()->id)->first();
        return view('authenticated.customer.personalInvoices')->with(compact('invoices', 'company'));
    }
}
