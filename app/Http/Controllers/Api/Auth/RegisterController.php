<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class),],
            'password' => ['required', 'min:8'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('myAppToken');

        if ($user) {
            $response = [
                'message' => 'berhasil membuat account!!',
                'data' => $user,
                'token' => $token->plainTextToken
            ];
            return response()->json($response, Response::HTTP_CREATED); //201 OK
        } else {
            $response = [
                'message' => 'gagal membuat account!!',
                'data' => $user
            ];
            return response()->json($response, Response::HTTP_FORBIDDEN); //403
        }
    }
}
