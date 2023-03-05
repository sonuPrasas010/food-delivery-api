<?php

namespace Database\Seeders;

use App\Models\ProductOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductOrder::factory()->create([
            "order_id"=> 1,
            "food_id" => 1,
            "price" => fake()->numberBetween(100, 500),
            "discount_amount" => fake()->numberBetween(10,100),
            "amount" => fake()->numberBetween(1000, 5000),
            "ordered_quantity"=>fake()->numberBetween(1,5),
            "food_name" => "pizza",
            "image_url" => fake()->imageUrl(),
            "small_image_url" =>fake()->imageUrl(760,765),

        ]);
    }
}
