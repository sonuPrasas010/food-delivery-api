<?php

namespace Database\Seeders;

use App\Models\FooodMainVendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodMainVendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        FooodMainVendor::factory()->create([
            'vendor_name' => 'sevale',
            'vendor_email' => 'sevale@gmail.com',
            'vendor_phone' => fake()->phoneNumber(),
            'vendor_address' => 'Itahari',
            'vendor_description' => 'Vendor supplies foods',
            'vendor_image' => "https://loopinfosol.in/themeforest/ekka-html-v3/ekka-admin/assets/img/user/u-xl-4.jpg",
            'status'=> true,
            'category_id' =>1,
        ]);
        FooodMainVendor::factory()->create([
            'vendor_name' => 'vanja',
            'vendor_email' => 'vanja@gmail.com',
            'vendor_phone' =>fake()->phoneNumber(),
            'vendor_address' => 'Itahari',
            'vendor_description' => 'Vendor supplies foods and everything',
            'vendor_image' => "https://loopinfosol.in/themeforest/ekka-html-v3/ekka-admin/assets/img/user/u-xl-4.jpg",

            'status'=> true,
            'category_id' =>2,
        ]);
        FooodMainVendor::factory()->create([
            'vendor_name' => 'solti',
            'vendor_email' => 'solti@gmail.com',
            'vendor_phone' => fake()->phoneNumber(),
            'vendor_address' => 'Itahari',
            'vendor_description' => 'Vendor supplies foods and everything',
            'vendor_image' => "https://loopinfosol.in/themeforest/ekka-html-v3/ekka-admin/assets/img/user/u-xl-4.jpg",

            'status'=> true,
            'category_id' =>3,
        ]);

    }
}
