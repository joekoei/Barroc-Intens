<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        return view('authenticated.index');
    }
    public function voorbeeld(){
        return view('authenticated.voorbeeld');
    }
}
