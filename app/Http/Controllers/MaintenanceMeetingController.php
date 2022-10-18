<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenanceMeetingController extends Controller
{
    public function index(){
        return view('authenticated.maintenance.meetings.index');
    }
}
