<?php

namespace Database\Seeders;

use App\Models\FoodMainCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodMainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FoodMainCategory::factory()->create([
            'category_name'=> "food",
            "short_desc" =>"food suppliers",
            "description" => "For the suppliers who supply food"
        ],

        );
        FoodMainCategory::factory()->create([
            'category_name'=> "bakery",
            "short_desc" =>"bakery suppliers",
            "description" => "For the suppliers who supply bakery"
        ],);

        FoodMainCategory::factory()->create([
            'category_name' =>"all",
            "short_desc"=> 'for all category',
            "description" =>"for those suppliers who supply both food and bakery",
        ]);

    }
}
