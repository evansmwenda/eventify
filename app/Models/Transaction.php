<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;
    protected $fillable = [
        'transaction_id',
        'user_id',
        'event_id',
        'total_amount',
        'discount_amount',
        'payment_method',
        'status',
        'gateway_reference',
        'gateway_response'
    ];

}
