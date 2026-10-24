<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserPasswordController extends Controller
{
    /**
     * Set/Update the authenticated user's password.
     */
    public function store(Request $request)
    {
        // 1. Validate the incoming request
        $validated = $request->validate([
            'password' => [
                'required',
                'string',
                'confirmed', // expects 'password_confirmation' in payload
                Password::min(8)->mixedCase()->numbers(),
            ],
        ]);

        // 2. Get the user currently authenticated via Sanctum token
        $user = $request->user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthenticated user context.',
            ], 401);
        }

        // 3. Update and hash the user's password
        $user->password = Hash::make($validated['password']);
        $user->save();

        // 4. Return success response
        return response()->json([
            'success' => true,
            'message' => 'Password created successfully!',
            'data'    => [
                'user' => [
                    'id'    => $user->id,
                    'name'  => $user->name,
                    'email' => $user->email,
                ],
            ],
        ], 200);
    }
}
?>