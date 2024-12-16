<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;

    protected $fillable =[
        'uuid',
        'title',
        'description',
        'type',
        'status',
        'user_id',
        'venue_id',
        'start_date',
        'end_date',
        'max_capacity',
        'current_capacity',
        'is_online',
        'online_link',
        'base_price',
        'pricing_tiers',
        'terms_and_conditions',
        'tags'
    ];
}
