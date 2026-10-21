<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
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
            // 'tech_experience' => 'required|string|max:255',
            // 'program' => 'required|string|max:255',
        ]);

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
            // 'tech_experience' => $validated['tech_experience'],
            // 'program' => $validated['program'],

        ]);

        // Return a JSON response
        return response()->json([
            'success' => true,
            'message' => 'Applicant registered successfully!',
            'data'    => $applicant
        ], 201);
    }
}

?>