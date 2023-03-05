<?php

namespace Database\Seeders;

use App\Models\ShippingPricing;
use Illuminate\Database\Seeder;

class ShippingPricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShippingPricing::factory()->create([
            "name" => fake()->streetName(),
            "shipping_cost" =>fake()->numberBetween(50, 100),
        ]);
        ShippingPricing::factory()->create([
            "name" => fake()->streetName(),
            "shipping_cost" =>fake()->numberBetween(50, 100)
        ]);
        ShippingPricing::factory()->create([
            "name" => fake()->streetName(),
            "shipping_cost" =>fake()->numberBetween(50, 100)
        ]);
    }
}
