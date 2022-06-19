<?php

namespace App\Http\Controllers;

use App\Models\User;
use illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function registerTest()
    {
        $validator =  Validator::make(request()->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $User = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);
        if ($User) {
            $response = [
                'message' => 'berhasil membuat account!!',
                'data' => $User
            ];
            return response()->json($response, Response::HTTP_CREATED); //201 OK
        } else {
            $response = [
                'message' => 'gagal membuat account!!',
                'data' => $User
            ];
            return response()->json($response, Response::HTTP_FORBIDDEN); //403
        }
    }
}
