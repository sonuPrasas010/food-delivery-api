<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';
    protected $primaryKey = 'food_id';

    protected $fillable = [
        'food_id',
        'food_name',
        'slug',
        'short_desc',
        'long_desc',
        'price',
        'discount',
        'small_image_url',
        'small_image_bg_url',
        'image_url',
        'large_image_bg_url',

    ];

    public function vendor(){
        return $this->belongsTo(FooodMainVendor::class,"vendor_id");
    }

    public function categories(){
       return $this->belongsToMany(FoodMainCategory::class,"food_categories","food_id","category_id", );
    }
}
