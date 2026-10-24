<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Get the current user through the request token.
     */

    public function fetchUser(Request $request)
    {
        //Get the user currently authenticated via Sanctum token
        $user = $request->user();
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthenticated user context.',
            ], 401);
        }

        // 4. Return success response
        return response()->json([
            'success' => true,
            'message' => 'Password created successfully!',
            'data'    => [
                'user' => $user,
            ],
        ], 200);
    }
}
?>