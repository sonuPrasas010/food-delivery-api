<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class FoodVendor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_main_vendors')->insert([
            'vendor_name'=> Str::random(10),
            'vendor_email'=>Str::random(10).'@gmail.com',
            'vendor_phone'=>random_int(10,10),
            'vendor_address'=>Str::random(10),
            'vendor_description'=>Str::random(10),
            'status'=>random_int(0,1),
            'category_id'=>random_int(1,3),
        ]);
    }
}
