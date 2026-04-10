<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetail extends Model
{
    public function products():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function order():BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    protected $fillable = [
        'product_id',
        'order_id',
        'quantity',
        'price'
    ];
}
