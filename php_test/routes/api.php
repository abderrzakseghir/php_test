<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\RegistrationController;

// Définir les routes API ici
Route::get('formations', [FormationController::class, 'index']);


Route::get('test', function () {
    return response()->json(['message' => 'API is working']);
});

