<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request) 
    {
        $credentials = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"],
        ]);   
        
        if(!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                "email" => ['The provided credentials are incorrect.'],
            ]);
        }

        $request->session()->regenerate();
        return response()->json([
            'message' => 'Logged in successfully',
        ]);

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json([
            'message' => 'Logged out successfully',
        ]);
    }
}
