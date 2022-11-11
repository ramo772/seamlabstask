<?php

namespace App\Http\Controllers;

use App\Helpers\Messages;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        $token = $user->createToken("seam")->plainTextToken;
        return $this->success_response(['user' => new UserResource($user), 'token' => $token], Messages::REGISTERED);
    }
    public function login(LoginRequest $request)
    {
        $user = User::where(['user_name' => $request->user_name])->first();
        if (!Hash::check($request->password, $user->password))
            return $this->error_response(Messages::WRONG_PASSWORD);
        $token = $user->createToken("seam")->plainTextToken;
        return $this->success_response(['user' => new UserResource($user), 'token' => $token], Messages::REGISTERED);

    }
}
