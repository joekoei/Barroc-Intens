<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        switch ($user->role){
            case 0:
                return view(''); // return view for ?
                break;
            case 1:
                return  view(''); // return view for ?
                break;
            default:
                return  view(''); // return view for ?
                break;
        }
    }
}