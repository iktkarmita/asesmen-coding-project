<?php

namespace App\Http\Controllers;

use App\Models\User;
use illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * @return void
     */
    public function index()
    {
        return view('auth.login');
    }
    public function loginTest()
    {
        $LoginData = request(['email', 'password']);

        if (!$token = auth()->attempt($LoginData)) {

            $response = [
                'message' => 'Gagal Login!!',
                'data' => $token
            ];
            return response()->json($response, Response::HTTP_FORBIDDEN); //403
        }

        return $this->responseWithToken($token); //200 ok
    }
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'sukses logout!!'], Response::HTTP_OK); //200 ok
    }
    /**
     * @param string $token
     * 
     * @return \illuminate\Http\JsonResponse
     */
    protected function responseWithToken($token)
    {
        return response()->json([
            'message' => 'login berhasil!!',
            'access_token' => $token

        ], Response::HTTP_OK); //200 ok
    }
}
