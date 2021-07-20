<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show($id) {
        return $id;
    }

    public function store(Request $request) {
        $user = User::create([
            'name' => $request->input('name'),
            'password' => Hash::make($request->input('password')),
            'email' => $request->input('email'),
        ]);

        return response()->json($user, 201);
    }

    public function getAuthUser() {
        $user = Auth::user();
        return $user;
    }

}
