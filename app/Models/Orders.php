<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'order_id', 'discount_id',
        'created_at', 'updated_at',
    ];

    public function discount(): BelongsTo
    {
        return $this->belongsTo(Discount::class);
    }
}
