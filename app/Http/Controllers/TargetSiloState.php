<?php

namespace App\Http\Controllers;

use App\TargetSiloState;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TargetSiloStateController extends Controller
{
    public static function create(Request $request) {
        $state = new TargetSiloState();
        
        $state->mass = $request->mass;
        $state->relativeHumidity = $request->relativeHumidity;
        $state->temperature = $request->temperature;

        $state->save();
    }

    public static function update(Request $request) {
        $state = TargetSiloState::find($request->id);

        $state->mass = $request->mass;
        $state->relativeHumidity = $request->relativeHumidity;
        $state->temperature = $request->temperature;

        $state->save();
    }
}
