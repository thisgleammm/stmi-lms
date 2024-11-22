<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login(UserLoginRequest $request): UserResource
    {
        $data = $request->validated();

        $user = User::where('email', $data['email'])->first();
        if(!$user || Hash::check($data['password'], $user->password)){
            throw new HttpResponseException(response([
                "errors" => [
                    "message" => [
                        "Email or Password Wrong"
                    ]
                ]
            ], 401));
        }
        $user->token = Str::uuid()->toString();
        $user->save();

        return new UserResource($user);
    }

    public function get(Request $request) : UserResource
    {
        $user = Auth::user();
        return new UserResource($user);
    }

    public function update(UserUpdateRequest $request) : UserResource
    {
        $data = $request->validated();
        $user = Auth::user();
        
        // Check if the user is properly authenticated
        if (!$user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        if (isset($data['password'])) {
            $user->password = Hash::make($data['password']);
        }

        // Ensure the user object is an instance of User model
        if ($user instanceof User) {
            $user->save();
        } else {
            return response()->json([
                'message' => 'Invalid user object'
            ], 400);
        }

        return new UserResource($user);
    }

    public function logout(Request $request) : JsonResponse
    {
        $user = Auth::user();
        $user->token = null;
        $user->save();

        return response()->json([
            'data' => true
        ])->setStatusCode(200);
    }
}
