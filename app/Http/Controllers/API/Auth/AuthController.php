<?php

namespace App\Http\Controllers\API\Auth;

use App\Enums\StatusCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\LoginWithGoogleRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Responser;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    protected $tokenName = "STICKERS_NG_TOKEN";

    /**
     * @param RegisterRequest $request
     * 
     * @return Responser
     */
    function register(RegisterRequest $request)
    {
        $data = collect($request->validated());
        $user = User::create($data->only(['name', 'email', 'password'])->toArray());

        if (!$user) {
            return Responser::send(StatusCode::SERVER_ERROR, [], "Error creating account, please try again later.");
        }

        $token = $user->createToken($this->tokenName)->accessToken;

        return Responser::send(StatusCode::OK, [
            'user' => $user,
            'token' => $token
        ], "Account created successfully.");
    }

    /**
     * @param LoginRequest $request
     * 
     * @return Responser
     */
    public function login(LoginRequest $request)
    {
        $data = [
            'email' => $request->validated('email'),
            'password' => $request->validated('password')
        ];

        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken($this->tokenName)->accessToken;

            return Responser::send(StatusCode::OK, [
                'user' => auth()->user(),
                'token' => $token
            ], "Login successful.");
        }

        return Responser::send(StatusCode::BAD_REQUEST, [], "Invalid credentials");
    }

    /**
     * @param LoginWithGoogleRequest $request
     * 
     * @return Responser
     */
    public function loginWithGoogle(LoginWithGoogleRequest $request)
    {
        $token =  $request->validated('token');
        $googleData = Socialite::driver('google')->scopes(['openid', 'profile', 'email'])->userFromToken($token);
        $user = User::where('email', $googleData->email)->first();

        if (!$user) {
            $user = User::create([
                'name' => $googleData->name,
                'email' => $googleData->email,
                'avatar' => $googleData->avatar,
                'google_access_token' => $request->input('token'),
                'google_id' => $request->input('token')
            ]);
        }

        $token = $user->createToken($this->tokenName)->accessToken;

        return Responser::send(StatusCode::CREATED, [
            'user' => $user,
            'token' => $token
        ], "Login successful.");
    }
}
