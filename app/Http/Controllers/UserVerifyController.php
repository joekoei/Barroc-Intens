<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserVerifyController extends Controller
{
    public function verify(Request $request){
        $token = explode("/",$request->getPathInfo());
        $user = User::where('token','=',$token[3])->first();
        if($user != null){
            return view('authenticated.customer.verify')->with(compact('user'));
        } else {
            return redirect()->back();
        }
    }

    public function store(Request $request){
        $password = Hash::make($request->password);
        $passwordConfirm = Hash::make($request->confirm_password);
        if($request->password == $request->confirm_password){
            $user = User::findOrFail($request->user_id);
            $user->update(['password'=>$password,'token'=>"-"]);
            $user->save();
            Company::create([
                "name"=>"fill-in",
                "phone"=>"fill-in",
                "street"=>"fill-in",
                "house_number"=>"11",
                "city"=>"fill-in",
                "country_code"=>"NL",
                "bkr_checked"=>date_create('now')->format('Y-m-d H:i:s'),
                "contact_id"=>$user->id
            ]);
            Auth::loginUsingId($user->id);
            return redirect()->route('dashboard');
        } else {
            return redirect()->back();
        }
    }
}
