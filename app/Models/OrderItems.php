<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItems extends Model
{
    use HasFactory;
    // Table Name
    protected $guarded = [];
/*
    // Fillable
    protected $fillable = [
        'qty',
        'total_amount',
        'note',
    ];

    // Hidden from JSON
    protected $hidden = [
        'order_item_id', 'orders_id', 'menu_id',
        'created_at', 'updated_at',
    ];
*/
    public function orders(): BelongsTo
    {
        return $this->belongsTo(Orders::class);
    }

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

}
