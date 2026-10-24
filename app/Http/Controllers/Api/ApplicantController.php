<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ApplicantController extends Controller
{
    
    public function getByEmail(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);
        $applicant = Applicant::where('email', $request->query('email'))->first();
        if (!$applicant) {
            return response()->json([
                'success' => false,
                'message' => 'Applicant record not found for this email.',
            ], 404);
        }
        return response()->json([
            'success' => true,
            'data'    => $applicant,
        ], 200);
    }
    
    public function store(Request $request)
    {
        // Validate incoming request using camelCase keys
        $validated = $request->validate([
            'country'          => 'required|string|max:255',
            'email'            => 'required|email|unique:applicants,email|max:255',
            'firstName'        => 'required|string|max:255',
            'lastName'         => 'required|string|max:255',
            'learningMode'     => 'required|string|max:255',
            'phone'            => 'required|string|max:255',
            'scholarshipCode'  => 'nullable|string|max:255',
            'status'           => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'educational_level' => 'required|string|max:255',
            'preferred_start_date' => 'required|date|max:255',
            'payment_status' => 'string',
            'payment_ref' => 'string',
            'program' => 'string|max:255|required',
            // 'tech_experience' => 'required|string|max:255',
            // 'program' => 'required|string|max:255',
        ]);

        $user = User::firstOrCreate(
            ['email' => $validated['email']],
            [
                'name'     => $validated['firstName'] . ' ' . $validated['lastName'],
                'password' => Hash::make(Str::random(12)), // Generates a secure temporary password
            ]
        );

        // Map camelCase request inputs to your snake_case database columns
        $applicant = Applicant::create([
            'country'          => $validated['country'],
            'email'            => $validated['email'],
            'first_name'       => $validated['firstName'],
            'last_name'        => $validated['lastName'],
            'learning_mode'    => $validated['learningMode'],
            'phone'            => $validated['phone'],
            'scholarship_code' => $validated['scholarshipCode'] ?? null,
            'status'           => $validated['status'],
            
            'gender' => $validated['gender'],
            'city' => $validated['city'],
            'educational_level' => $validated['educational_level'],
            'preferred_start_date' => $validated['preferred_start_date'],
            'payment_status' => $validated['payment_status'],
            'payment_ref' => $validated['payment_ref'],
            'program' => $validated['program'],
            // 'tech_experience' => $validated['tech_experience'],

        ]);

        // 4. Generate an authentication token for the user
        $token = $user->createToken('applicant_auth_token')->plainTextToken;

        // 5. Return JSON response including the token
        return response()->json([
            'success' => true,
            'message' => 'Applicant registered and logged in successfully!',
            'token'   => $token, // <--- Send token to frontend
            'data'    => [
                'applicant' => $applicant,
                'user'      => $user,
            ]
        ], 201);

        // Return a JSON response
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Applicant registered successfully!',
        //     'data'    => $applicant
        // ], 201);
    }
}

?>