<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return response()->json(Auth::user(), 200);
        }

        return response()->json(null, 400);
    }
}