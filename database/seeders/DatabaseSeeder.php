<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AnonymousProductOrder;
use App\Models\Food;
use App\Models\FoodMainCategory;
use App\Models\FooodMainVendor;
use App\Models\Order;
use App\Models\ShippingPricing;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // FooodMainVendor::factory()->create();
        // $this->call([FoodVendor::class]);

        $this->call(FoodMainCategorySeeder::class);
        $this->call(FoodMainVendorSeeder::class);
        $this->call(FoodSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ShippingPricingSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(ProductOrderSeeder::class);
        $this->call(AnonymousOrderSeeder::class);
        $this->call(AnonymousProductOrderSeeder::class);

    }
}
