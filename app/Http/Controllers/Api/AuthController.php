<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Authenticate user and issue a Sanctum token.
     */
    public function login(Request $request)
    {
        // 1. Validate request credentials
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        // 2. Find user by email
        $user = User::where('email', $credentials['email'])->first();

        // 3. Verify user existence and password hash
        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials do not match our records.'],
            ]);
        }

        // 4. Create Sanctum API token
        $token = $user->createToken('auth_token')->plainTextToken;

        // 5. Return success response with user context and token
        return response()->json([
            'success' => true,
            'message' => 'Login successful!',
            'token'   => $token,
            'data'    => [
                'user' => [
                    'id'    => $user->id,
                    'name'  => $user->name,
                    'email' => $user->email,
                ],
            ],
        ], 200);
    }

    /**
     * Revoke tokens (Logout).
     */
    public function logout(Request $request)
    {
        // Revoke current request token
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logged out successfully.',
        ], 200);
    }
}
