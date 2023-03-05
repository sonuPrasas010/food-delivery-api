<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnonymousProductOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'anonymous_order_id',
        'food_id',
        'price',
        'discount_amount',
        'total_amount',
        'ordered_quantity',
        'food_name',
        'image_url',
        'small_image_url',
        'created_at',
        'updated_at',
    ];

    public function anonymousOrder(){
       return $this->belongsTo(AnonymousOrder::class, "anonymous_order_id");
    }

    public function food() {
       return $this->belongsTo(Food::class,"food_id");
    }
}
