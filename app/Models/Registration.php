<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    /** @use HasFactory<\Database\Factories\RegistrationFactory> */
    use HasFactory;
    protected $fillable = [
        'event_id',
        'user_id',
        'status',
        'custom_form_responses',
        'requires_approval'
    ];
}
