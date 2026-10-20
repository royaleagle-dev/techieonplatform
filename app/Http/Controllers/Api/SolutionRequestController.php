<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SolutionRequest;
use Illuminate\Http\Request;

class SolutionRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'agreed'      => 'required|boolean',
            'audience'    => 'required|string|max:255',
            'budget'      => 'required|string|max:255',
            'company'     => 'required|string|max:255',
            'customReq'   => 'nullable|string',
            'description' => 'required|string',
            'email'       => 'required|email|max:255',
            'features'    => 'required|array',
            'help'        => 'required|string|max:255',
            'industry'    => 'required|string|max:255',
            'method'      => 'required|string|max:255',
            'name'        => 'required|string|max:255',
            'notes'       => 'nullable|string',
            'objective'   => 'required|string|max:255',
            'phone'       => 'required|string|max:255',
            'project'     => 'required|string|max:255',
            'status'      => 'required|string|max:255',
            'timeline'    => 'required|string|max:255',
            'type'        => 'required|string|max:255',
            'url'         => 'nullable|string|max:255',
        ]);

        $solutionRequest = SolutionRequest::create([
            'agreed'      => $validated['agreed'],
            'audience'    => $validated['audience'],
            'budget'      => $validated['budget'],
            'company'     => $validated['company'],
            'custom_req'  => $validated['customReq'] ?? null,
            'description' => $validated['description'],
            'email'       => $validated['email'],
            'features'    => $validated['features'],
            'help'        => $validated['help'],
            'industry'    => $validated['industry'],
            'method'      => $validated['method'],
            'name'        => $validated['name'],
            'notes'       => $validated['notes'] ?? null,
            'objective'   => $validated['objective'],
            'phone'       => $validated['phone'],
            'project'     => $validated['project'],
            'status'      => $validated['status'],
            'timeline'    => $validated['timeline'],
            'type'        => $validated['type'],
            'url'         => $validated['url'] ?? null,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Solution request submitted successfully!',
            'data'    => $solutionRequest
        ], 201);
    }
}

?>
