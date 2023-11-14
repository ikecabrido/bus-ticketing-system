<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\BusResource;
use App\Models\Bus;

class BusController extends Controller
{
    public function index() {
        return BusResource::collection(Bus::all());
        // return 'Successful route! You have a connection';
    }

    public function getBusSchedule() {}
}
