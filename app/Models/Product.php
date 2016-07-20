<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = ['name' , 'manufacturer' , 'price' , 'details' , 'quantity' , 'category_id' , 'thumbnail'];

    public function categories()
    {
        return $this->belongsToMany(App\Models\Category::class, 'category_product');
    }

    public function orders()
    {
        return $this->belongsToMany(App\Models\Order::class);
    }

    public function carts()
    {
        return $this->belongsToMany(App\Models\Cart::class);
    }

    public function photos()
    {
        return $this->hasMany(App\Models\AlbumPhoto::class);
    }

    public function options(){
        return $this->hasMany(App\Models\Option::class);
    }
}
