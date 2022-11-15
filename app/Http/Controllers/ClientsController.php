<?php

namespace App\Http\Controllers;

use App\Mail\offerContractMail;
use App\Mail\verifyUserMail;
use App\Models\Company;
use App\Models\Invoice;
use App\Models\leasecontract;
use App\Models\Maintenance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;

class ClientsController extends Controller
{
    public function index(){
        $companies = Company::all();
        return view('authenticated.sales.clients.index')->with(compact('companies'));

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
        $user = User::create([
            'name'=>$request->name,
            "email"=>$request->email,
            "password"=>Hash::make("tobesetupped"),
            "role_id"=>5,
            "notes"=>"{}",
            "token"=>Str::random(32)
        ]);
        $user->save();
        $email = 'devbyte@dev.nl';

        Mail::to($email)->send(new verifyUserMail($user->id));
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

    public function bestellingen(){
        return view('authenticated.customer.bestellingen');
    }

    public function showStoringen(){
        $company = Company::where('contact_id','=',Auth::user()->id)->first();
        $maintenances = Maintenance::all()->where('company_id','=',$company->id);

        return view('authenticated.customer.personalStoringen')->with(compact('maintenances'));
    }

    public function personalLeaceProducts(){
        $company = Company::where('contact_id','=',Auth::user()->id)->first();
        $products = leasecontract::all()->where('company_id','=',$company->id);
        return view('authenticated.customer.personalProducts')->with(compact('products'));
    }

    public function storeStoring(Company $company, $id){
        $lease = leasecontract::where("id",'=',$id)->first();
        Maintenance::create([
            "remark"=>$lease->product,
            'company_id'=>$company->id,
            'date_added'=>date_create('now')->format('Y-m-d H:i:s'),
            "user_id"=>"2"
        ]);

        return redirect()->back()->with(['status'=>"Verzonden!"]);
    }
}
