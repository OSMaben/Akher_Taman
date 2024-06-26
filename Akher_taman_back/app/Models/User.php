<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use HasFactory, HasApiTokens,SoftDeletes;

    protected $fillable = [
        'name', 'email', 'password', 'address', 'phone_number', 'image',
    ];


    public $timestamps = false;


    public function role()
    {
        return $this->belongsTo(Roles::class);
    }


    public function products()
    {
        return $this->hasMany(Products::class,'seller_id');
    }

    public function bids()
    {
        return $this->hasMany(Bid::class, 'user_id');
    }
}
