<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginRequest $request) 
    {
        $credentials = $request->validated();
        
        if(!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                // field => error message
                "email" => [__("auth.failed")],
            ]);
        }

        $request->session()->regenerate();
        return response()->json([
            'message' => 'Logged in successfully',
        ]);

    }

    public function logout(Request $request)
    {
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json([
            'message' => 'Logged out successfully',
        ]);
    }
}
