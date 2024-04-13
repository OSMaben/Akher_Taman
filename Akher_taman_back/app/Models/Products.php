<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
   protected $fillable = [
        'seller_id',
        'title',
        'starting_price',
        'description',
        'condition',
        'status',
        'location',
        'category_id',
        'current_price',
        'bid_end_time',
       'image',
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function bids()
    {
        return $this->hasMany(Bid::class, 'product_id');
    }

}
