<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /** @use HasFactory<\Database\Factories\TicketFactory> */
    use HasFactory;

    protected $fillable =[
        'event_id',
        'user_id',
        'type',
        'price',
        'status',
        'qr_code',
        'purchase_date',
        'checked_in_at',
        'additional_options'
    ];

}
