<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    use HasFactory;
    // protected $primaryKey = null;

    protected $fillable = [
        'id',
        'food_id',
        'price',
        'discount_amount',
        'amount',
        'ordered_quantity',
        'food_name',
        "image_url",
        "small_image_url",

    ];

    function order(){
        $this->belongsTo(Order::class,"order_id");
    }

    function food(){
      return  $this->belongsTo(Food::class,"food_id");
    }
}
