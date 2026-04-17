<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $token = $request->user()->createToken('auth_token');
            return ['token'=>$token->plainTextToken];
        }
        else {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }
    }

    public function logout(Request $request)
    {
        $user = $request->user();

        $user->currentAccessToken()->delete();

        return response()->noContent();
    }
}
