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
    ];
}

?>