<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;
use Spatie\LaravelIgnition\Support\Composer\FakeComposer;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Food::factory()->create([
        "food_name"=>"Pizza",
        "slug" =>"sevale-pizza",
        "short_desc" =>fake()->sentence(2),
        "long_desc" =>fake()->sentence(20),
        "price" => fake()->numberBetween(50,1000),
        "discount"=>fake()->randomFloat(15,0,15),
        "small_image_url"=>fake()->imageUrl(130,145,),
        "small_image_bg_url"=>fake()->imageUrl(130,145,),
        "image_url"=>fake()->imageUrl(760,765,),
        "large_image_bg_url"=>fake()->imageUrl(760,765),
        "vendor_id"=> 1,
       ]);

       Food::factory()->create([
        "food_name"=>"Momo",
        "slug" =>"sevale-momo",
        "short_desc" =>fake()->sentence(2),
        "long_desc" =>fake()->sentence(20),
        "price" => fake()->numberBetween(50,1000),
        "discount"=>fake()->randomFloat(15,0,15),
        "small_image_url"=>fake()->imageUrl(130,145,),
        "small_image_bg_url"=>fake()->imageUrl(130,145,),
        "image_url"=>fake()->imageUrl(760,765,),
        "large_image_bg_url"=>fake()->imageUrl(760,765,),
        "vendor_id"=>1
       ]);
       Food::factory()->create([
        "food_name"=>"Chowmin",
        "slug" =>"sevale-chowmin",
        "short_desc" =>fake()->sentence(2),
        "long_desc" =>fake()->sentence(20),
        "price" => fake()->numberBetween(50,1000),
        "discount"=>fake()->randomFloat(15,0,15),
        "small_image_url"=>fake()->imageUrl(130,145,),
        "small_image_bg_url"=>fake()->imageUrl(130,145,),
        "image_url"=>fake()->imageUrl(760,765),
        "large_image_bg_url"=>fake()->imageUrl(760,765),
        "vendor_id"=>1
       ]);

       Food::factory()->create([
        "food_name"=>"Pizza",
        "slug" =>"bhanja-pizza",
        "short_desc" =>fake()->sentence(2),
        "long_desc" =>fake()->sentence(20),
        "price" => fake()->numberBetween(50,1000),
        "discount"=>fake()->randomFloat(15,0,15),
        "small_image_url"=>fake()->imageUrl(130,145,),
        "small_image_bg_url"=>fake()->imageUrl(130,145,),
        "image_url"=>fake()->imageUrl(760,765),
        "large_image_bg_url"=>fake()->imageUrl(760,765),
        "vendor_id"=> 2,
       ]);

       Food::factory()->create([
        "food_name"=>"Momo",
        "slug" =>"bhanja-momo",
        "short_desc" =>fake()->sentence(2),
        "long_desc" =>fake()->sentence(20),
        "price" => fake()->numberBetween(50,1000),
        "discount"=>fake()->randomFloat(15,0,15),
        "small_image_url"=>fake()->imageUrl(130,145,),
        "small_image_bg_url"=>fake()->imageUrl(130,145,),
        "image_url"=>fake()->imageUrl(760,765),
        "large_image_bg_url"=>fake()->imageUrl(760,765),
        "vendor_id"=>2
       ]);
       Food::factory()->create([
        "food_name"=>"bhanja",
        "slug" =>"bhanja-chowmin",
        "short_desc" =>fake()->sentence(2),
        "long_desc" =>fake()->sentence(20),
        "price" => fake()->numberBetween(50,1000),
        "discount"=>fake()->randomFloat(15,0,15),
        "small_image_url"=>fake()->imageUrl(130,145,),
        "small_image_bg_url"=>fake()->imageUrl(130,145,),
        "image_url"=>fake()->imageUrl(760,765),
        "large_image_bg_url"=>fake()->imageUrl(760,765),
        "vendor_id"=>2
       ]);

       Food::factory()->create([
        "food_name"=>"Pizza",
        "slug" =>"solti-pizza",
        "short_desc" =>fake()->sentence(2),
        "long_desc" =>fake()->sentence(20),
        "price" => fake()->numberBetween(50,1000),
        "discount"=>fake()->randomFloat(15,0,15),
        "small_image_url"=>fake()->imageUrl(130,145),
        "small_image_bg_url"=>fake()->imageUrl(130,145),
        "image_url"=>fake()->imageUrl(760,765),
        "large_image_bg_url"=>fake()->imageUrl(760,765),
        "vendor_id"=> 3,
       ]);

       Food::factory()->create([
        "food_name"=>"Momo",
        "slug" =>"solti-momo",
        "short_desc" =>fake()->sentence(2),
        "long_desc" =>fake()->sentence(20),
        "price" => fake()->numberBetween(50,1000),
        "discount"=>fake()->randomFloat(15,0,15),
        "small_image_url"=>fake()->imageUrl(130,145,),
        "small_image_bg_url"=>fake()->imageUrl(130,145,),
        "image_url"=>fake()->imageUrl(760,765),
        "large_image_bg_url"=>fake()->imageUrl(760,765),
        "vendor_id"=>3
       ]);
       Food::factory()->create([
        "food_name"=>"Chowmin",
        "slug" =>"solti-chowmin",
        "short_desc" =>fake()->sentence(2),
        "long_desc" =>fake()->sentence(20),
        "price" => fake()->numberBetween(50,1000),
        "discount"=>fake()->randomFloat(15,0,15),
        "small_image_url"=>fake()->imageUrl(130,145,),
        "small_image_bg_url"=>fake()->imageUrl(130,145,),
        "image_url"=>fake()->imageUrl(760,765),
        "large_image_bg_url"=>fake()->imageUrl(760,765),
        "vendor_id"=>3
       ]);
    }
}
