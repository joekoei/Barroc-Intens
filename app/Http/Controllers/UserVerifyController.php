<?php

namespace App\Http\Controllers;

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
            Auth::loginUsingId($user->id);
            return redirect()->route('dashboard');
        } else {
            return redirect()->back();
        }
    }
}
