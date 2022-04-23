<?php

use Illuminate\Support\Facades\Route;
use App\Models\GrainSilo;
use App\Http\Controllers\GrainSiloController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    $silos = GrainSilo::all();
    
    return view('dashboard', ['silos' => $silos]);
});

Route::get('/silo/{id}', function ($id) {
    $silo = GrainSilo::find($id);
    return $silo;
});

Route::get('/silos', function () {
    $silos = GrainSilo::all();
    return $silos;
});

Route::post('/silo', function (Request $request) {
    GrainSiloController::create($request);
});

Route::put('/silo', function (Request $request) {
    GrainSiloController::update($request);
});

Route::delete('/silo/{id}', function ($id) {
    GrainSilo::find($id)->delete();
});


Route::get('/targetstate/{id}', function ($id) {
    $state = TargetSiloState::find($id);
    return $state;
});

Route::get('/targetstates', function () {
    $state = TargetSiloState::all();
    return $state;
});

Route::post('/targetstate', function (Request $request) {
    TargetSiloStateController::create($request);
});

Route::put('/targetstate', function (Request $request) {
    TargetSiloStateController::update($request);
});

Route::delete('/targetstate/{id}', function ($id) {
    TargetSiloStateController::find($id)->delete();
});