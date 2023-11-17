<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Resources\BusResource;
use Exception;
use App\Models\Bus;
use App\Models\Destination;
use App\Http\Resources\DestinationResource;

class BusController extends Controller
{
    public function index() {
        return BusResource::collection(Bus::all());
        // return 'Successful route! You have a connection';
    }

    public function getPlaces() {
        return DestinationResource::collection(Destination::all());
    }

    public function getBusSched(Request $request) {
        // $bus = Bus::where("destination_from_id" , $request->query("place"))
        // ->where("destination_to_id", $request->query("place"))->get();
        // return BusResource::collection($bus);
        // return $bus;
        // return $request->query();
        // $bus = Bus::whereHas('destination_from_id', 'destination_to_id')
        // ->where('place', $request->query('place'))
        // ->where('place', $request->query('place'));
        // return BusResource::collection($bus);
        // $bus = Bus::whereHas('destination_from', function ($query) use ($request) {
        //     $query->where('place', $request->input('place'));
        // })->whereHas('destination_to', function ($query) use ($request) {
        //     $query->where('place', $request->input('place'));
        // })->get();
        
        // return BusResource::collection($bus);
        try {
            $bus = Bus::with('destination_from')->whereHas('destination_from', function ($query) use ($request) {
                        $query->where('place', $request->query('destination_from'));
                    })->with('destination_to')->whereHas('destination_to', function ($query) use ($request) {
                        $query->where('place', $request->query('destination_to'));
                    })->get();
            
            if ($bus->isEmpty()) {
                return new Exception('No buses found!');
            }
        
            return BusResource::collection($bus);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        }

    }
}
