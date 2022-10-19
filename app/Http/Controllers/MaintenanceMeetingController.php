<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;

class MaintenanceMeetingController extends Controller
{
    public function index(){
        $meetings = Maintenance::all();
        return view('authenticated.maintenance.meetings.index')->with(compact('meetings'));
    }
}
