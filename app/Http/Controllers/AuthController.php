<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{
    public function login(Request $request){
         $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
         ]);

         if(! Auth::attempt($validated)){
            return response()->json([
                'message'=>'Invalid credentials'
            ], 401);
         }

         $user = User::where('email', $validated['email'])->first();

         return response()->json([
            'message' => 'Logged in successfully',
            'access_token' => $user->createToken('api_token')->plainTextToken,
            'token_type' => 'Bearer'
         ],200);
    }

    public function register(Request $request){
      
      $validated = $request->validate([
         'name'=>'required|max:255',
         'email'=>'required|max:255|email|unique:users,email',
         'password'=>'required|confirmed|min:8',

      ]);

      $user = User::create($validated);

      return response()->json([
         'message' => 'New user registered',
         'data' => $user,
         'access_token' => $user->createToken('api_token')->plainTextToken,
         'token_type' => 'Bearer' 
      ],201);
    }
}
