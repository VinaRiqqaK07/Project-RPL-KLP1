<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'category_id',
    //     'discount_id',
    //     'name',
    //     'price',
    //     'quantity',
    //     'status',
    //     'description',
    //     'image',
    // ];
    protected $guarded = [];

    // protected function casts(): array
    // {
    //     return [
    //         'status' => 'boolean',
    //     ];
    // }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
}
