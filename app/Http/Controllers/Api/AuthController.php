<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], Response::HTTP_BAD_REQUEST);
        } else {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $token = $user->createToken('Laravel');
                return response()->json(['user' => $user, 'token' => $token->plainTextToken], Response::HTTP_CREATED);
            } else {
                return response()->json(['error' => 'Unauthorized'], Response::HTTP_OK);
            }
        }
        return response()->json($request->all());
    }

    public function logout(Request $request){
        $user = Auth::user();
        if (Auth::check()) {
            $user->currentAccessToken()->delete();
            return response()->json(['message'=> 'Logged out successfull.'], Response::HTTP_CREATED);
        } else {
            return response()->json(['message'=> 'Unaothorised'], Response::HTTP_BAD_REQUEST);
        }
    }

    public function getUser(Request $request){
        return response()->json($request->user());
    }

}
