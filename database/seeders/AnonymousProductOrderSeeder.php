<?php

namespace Database\Seeders;

use App\Models\AnonymousProductOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnonymousProductOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 1,
            "food_id"=> 1,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "pizza",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);
        AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 1,
            "food_id"=> 2,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "chowmin",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);
        AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 1,
            "food_id"=> 3,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);


        AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 2,
            "food_id"=> 4,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);
        AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 2,
            "food_id"=> 5,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);

        AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 2,
            "food_id"=> 6,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);


        AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 3,
            "food_id"=> 7,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);
        AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 3,
            "food_id"=> 8,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);
        AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 4,
            "food_id"=> 9,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);

        AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 5,
            "food_id"=> 9,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);  AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 5,
            "food_id"=> 9,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);  AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 5,
            "food_id"=> 9,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);


        AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 5,
            "food_id"=> 9,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);  AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 5,
            "food_id"=> 9,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);  AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 5,
            "food_id"=> 9,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);

        AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 6,
            "food_id"=> 9,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);  AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 6,
            "food_id"=> 9,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);  AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 6,
            "food_id"=> 9,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);



        AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 7,
            "food_id"=> 9,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);  AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 7,
            "food_id"=> 9,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);  AnonymousProductOrder::factory()->create([
            "anonymous_order_id" => 7,
            "food_id"=> 9,
            'price' => fake()->numberBetween(100, 150),
            "discount_amount" => fake()->numberBetween(0, 100),
            "total_amount" =>fake()->numberBetween(500, 1000),
            "ordered_quantity" => fake()->numberBetween(1,10),
            "food_name" => "momo",
            "image_url" =>fake()->imageUrl(760,765,),
            "small_image_url" => fake()->imageUrl(130,145,),
        ]);
    }
}
