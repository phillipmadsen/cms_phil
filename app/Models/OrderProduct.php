<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = "order_product";
    protected $fillable = ['product_id','order_id','amount','options'];

    public function order()
    {
        return $this->belongsTo(App\Models\Order::class);
    }

    public function product()
    {
        return $this->belongsTo(App\Models\Product::class);
    }
}
