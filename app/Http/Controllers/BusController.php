<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index() {
        // return BusResource::collection(Bus::all());
        return 'Successful route! You have a connection';
    }

    public function getBusSchedule() {}
}
