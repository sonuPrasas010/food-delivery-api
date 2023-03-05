<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooodMainVendor extends Model
{
    use HasFactory;

   protected $table = 'food_main_vendors';
   protected $primaryKey = 'vendor_id';

   protected $fillable = [
    'vendor_id',
    'vendor_name',
    'vendor_email',
    'vendor_phone',
    'vendor_address',
    'vendor_image',
    'vendor_image_bg',
    'vendor_description',
    'status',
    'category_id'

   ];

  public function food_main_category(){
       return $this->belongsTo(FoodMainCategory::class,'category_id');
   }

   public function foods(){
    return $this->hasMany(Food::class,"vendor_id");
   }
}
