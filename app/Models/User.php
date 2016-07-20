<?php

namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser;

/**
 * Class User.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class User extends EloquentUser
{
    /**
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    /**
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'isAdmin', 'username', 'last_login', 'created_at', 'updated_at'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
            "id" => "integer",
            "isAdmin" => "boolean",
            "first_name" => "string",
            "last_name" => "string",
            "email" => "string",
            "username" => "string",
        "last_login" => "date",
    ];

    public static $rules = [

    ];

    /**
     * Relationship with the Profile model.
     *
     * @author  Phillip Madsen <pmadsen2013@gmail.com>
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     *
     */
     public function userInfo()
    {
        return $this->hasOne(\App\Models\UserInfo::class);
    }

    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class);
    }

    public function cart()
    {
        return $this->hasMany(\App\Models\Cart::class);
    }

    public function messages()
    {
        return $this->hasMany(\App\Models\Message::class);
    }



}