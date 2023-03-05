<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnonymousOrder extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'vendor_id',
        "shipping_cost",
        "discount_amount",
        "total",
        "mobile_number",
        'name',
        "city",
        "locality",
        'shipping_pricing_id',
        "order_status",
        "payment_status",
        "payment_method",
        "driver_number",
        'additional_discount_amount',
        'additional_discount_reason',
        "additional_charge_amount",
        "additional_charge_amount",
        'created_at',
        "updated_at"

    ];

    public function vendor(){
        return $this->belongsTo(FooodMainVendor::class,"vendor_id", );
    }

    public function anonymousProductOrder(){
        return $this->hasMany(AnonymousProductOrder::class,"anonymous_order_id");
    }
}
