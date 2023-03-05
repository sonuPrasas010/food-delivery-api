<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingPricing extends Model
{
    use HasFactory;
    protected $table = "shipping_pricings";
    protected $primaryKey = "shipping_pricing_id";
    public $timestamps = false;
    protected $fillable = [
        "name",
        "shipping_cost"
    ];

}
