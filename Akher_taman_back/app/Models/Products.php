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
        'location',
        'category_id',
        'current_price',
        'bid_end_time'
    ];
}
