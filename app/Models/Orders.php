<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    // Table Name
    protected $table = 'orders';

    // Fillable
    protected $fillable = [
        'gross_amount',
        'customer_name',
        'table_number',
        'status',
    ];

    // Hidden from JSON
    protected $hidden = [
        'order_id', 'discoung_id',
        'created_at', 'updated_at',
    ];
}
