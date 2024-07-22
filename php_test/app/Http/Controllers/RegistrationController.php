<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Registration; // Assurez-vous que ce modèle existe
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        // Valider les données
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'formation_id' => 'required|exists:formations,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Créer une nouvelle inscription
        $registration = Registration::create([
            'user_id' => $request->input('user_id'),
            'formation_id' => $request->input('formation_id'),
        ]);

        return response()->json(['message' => 'Registration successful', 'registration' => $registration]);
    }
}