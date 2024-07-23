<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Registration; 
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
   
        $validator = Validator::make($request->all(), [
            'nom' => 'required|:nom',
            'email' => 'required|:email',
            'formation_id' => 'required|exists:formations,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

       
        $registration = Registration::create([
            'nom' => $request->input('nom'),
            'email' => $request->input('email'),
            'formation_id' => $request->input('formation_id'),
        ]);

        return response()->json(['message' => 'Registration successful', 'registration' => $registration]);
    }
}