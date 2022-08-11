<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends BaseController
{
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'mobile' => 'required|string|unique:users,mobile',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'mobile' => $fields['mobile'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        // $response = [
		// 	'success' => true,
        //     'user' => $user,
        //     'token' => $token
        // ];

        return response()->json([
            'success' => true,
            'message' => 'Register successfully!',
            'token' => $token,
            'user' => $user,
        ], 200);
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'mobile' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check mobile
        $user = User::where('mobile', $fields['mobile'])->first();

        // Check password
        if(!$user || !Hash::check($fields['password'], $user->password)) {

            return response()->json([
                'success' => false,
                'message' => 'password or mobile nunmber mismatch'

            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        // $response = [
		// 	'success' => true,
        //     'user' => $user,
        //     'token' => $token
        // ];

        return response()->json([
            'success' => true,
            'message' => 'Login successfully!',
			'user' => $user,
            'token' => $token,

        ], 200);
    }

    public function logout(Request $request) {
        auth('sanctum')->user()->tokens()->delete();

        return [
			'success' => true,
            'message' => 'Logged out'
        ];
    }
}
