<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'country',
        'email',
        'first_name',
        'last_name',
        'learning_mode',
        'phone',
        'scholarship_code',
        'status',
        'gender',
        'city',
        'educational_level',
        'preferred_start_date',
        'payment_status',
        'payment_ref',
        'program',
        // 'tech_experience',
    ];

    protected $casts = [
        'preferred_start_date' => 'date',
    ];
}

?>