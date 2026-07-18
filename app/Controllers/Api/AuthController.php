<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Exception;

class AuthController extends Controller
{
    /**
     * Login User
     */
    public function login(Request $request)
    {
        try {

            // Validate request
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|string'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => 'Validation Error',
                    'errors' => $validator->errors()
                ], 422);
            }


            // Check login credentials
            if (!Auth::attempt($request->only('email', 'password'))) {

                return response()->json([
                    'message' => 'Invalid email or password',
                    'data' => null
                ], 401);
            }


            // Get authenticated user
            $user = Auth::user();


            // Remove previous tokens (optional)
            $user->tokens()->delete();


            // Create Sanctum token
            $token = $user->createToken('ticktrack_token')->plainTextToken;


            return response()->json([
                'message' => 'Login Successfully',
                'data' => [
                    'token' => $token,
                    'user' => $user
                ]
            ], 200);


        } catch (Exception $e) {

            return response()->json([
                'message' => 'Login Failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    /**
     * Get Current User Profile
     */
    public function me(Request $request)
    {
        try {

            $user = $request->user();


            return response()->json([
                'message' => 'Profile Retrieved Successfully',
                'data' => $user
            ], 200);


        } catch (Exception $e) {

            return response()->json([
                'message' => 'Unable to retrieve profile',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    /**
     * Logout User
     */
    public function logout(Request $request)
    {
        try {

            $request->user()->currentAccessToken()->delete();


            return response()->json([
                'message' => 'Logout Successfully'
            ], 200);


        } catch (Exception $e) {

            return response()->json([
                'message' => 'Logout Failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}