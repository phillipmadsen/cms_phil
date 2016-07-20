<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(App\Models\User::class);
    }

    public function products()
    {
        return $this->belongsToMany(App\Models\Product::class);
    }

    public function coupon()
    {
        return $this->belongsTo(App\Models\Coupon::class);
    }

}
