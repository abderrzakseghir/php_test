<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\RegistrationController;


Route::get('/', function () {
    return view('welcome');
});
 Route::get('api/formations', [FormationController::class, 'index']);



Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});

Route::post('api/test', [RegistrationController::class, 'store']);


