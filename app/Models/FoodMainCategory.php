<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodMainCategory extends Model
{
    use HasFactory;
    protected $table = 'food_main_categories';
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'short_desc',
        'image',
        'bg_image',
    ];

    public function foodMainVendor(){
      return  $this->hasMany(FoodMainCategory::class);
    }
    public function foods(){
        $this->belongsToMany(Food::class, "food_categories","category_id","food_id");
    }

}
