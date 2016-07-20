<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table = "options";
    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo(App\Models\Product::class);
    }

    public function values()
    {
        return $this->hasMany(App\Models\OptionValue::class);
    }

}
