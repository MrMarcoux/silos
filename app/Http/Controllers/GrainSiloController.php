<?php

namespace App\Http\Controllers;

use App\GrainSilo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GrainSiloController extends Controller
{
    public static function create(Request $request) {
        $grainSilo = new GrainSilo();
        
        $grainSilo->capacity = $request->capacity;
        $grainSilo->occupancy = $request->occupancy;
        $grainSilo->mass = $request->mass;
        $grainSilo->relativeHumidity = $request->relativeHumidity;
        $grainSilo->temperature = $request->temperature;
        $grainSilo->save();
    }

    public static function update(Request $request) {
        $grainSilo = GrainSilo::find($request->id);

        $grainSilo->capacity = $request->capacity;
        $grainSilo->occupancy = $request->occupancy;
        $grainSilo->mass = $request->mass;
        $grainSilo->relativeHumidity = $request->relativeHumidity;
        $grainSilo->temperature = $request->temperature;

        $grainSilo->save();
    }
}
