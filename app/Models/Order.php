<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = "order_id";
    protected $fillable = [
        'order_id',
        'user_id',
        'vendor_id',
        "shipping_cost",
        "discount_amount",
        "total",
        "ordered_date",
        "mobile_number",
        "city",
        "locality",
        "precise_location",
        "order_status",
        "payment_status",
        "payment_method",
        "driver_number",
    ];

    public function user(){
        return $this->belongsTo(User::class,"user_id");
    }

    public function productOrders(){
        return $this->hasMany(ProductOrder::class, "order_id");
    }

    public function vendor(){
        return $this->belongsTo(FooodMainVendor::class,"vendor_id");
    }
}
