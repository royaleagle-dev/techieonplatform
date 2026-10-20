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