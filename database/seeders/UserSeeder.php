<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'firstName'=> 'sonu dhakal',
            'lastName'=>'',
            "user_name"=> "sonu@gmail.com",
            'sex'=> "M",
            'address'=>fake()->address(),
            'imageUrl'=>fake()->imageUrl(),
            'age' =>fake()->numberBetween(15,45),
            "mobile_no"=>fake()->phoneNumber(),
            "role" => 0,
            "password"=> Hash::make("password")
        ]);

        User::factory()->create([
            'firstName'=> 'amit shah',
            'lastName'=>'',
            "user_name"=> "amit@gmail.com",
            'sex'=> "M",
            'address'=>fake()->address(),
            'imageUrl'=>fake()->imageUrl(),
            'age' =>fake()->numberBetween(15,45),
            "mobile_no"=>fake()->phoneNumber(),
            "role" => 2,
            "password"=> Hash::make("password")
        ]);
        User::factory()->create([
            'firstName'=> fake()->name(),
            'lastName'=>'',
            "user_name"=> fake()->email(),
            'sex'=> "g",
            'address'=>fake()->address(),
            'imageUrl'=>fake()->imageUrl(),
            'age' =>fake()->numberBetween(15,45),
            "mobile_no"=>fake()->phoneNumber(),
            "role" => 1,
            "password"=> Hash::make("password")
        ]); User::factory()->create([
            'firstName'=> fake()->name(),
            'lastName'=>'',
            "user_name"=> fake()->email(),
            'sex'=> "g",
            'address'=>fake()->address(),
            'imageUrl'=>fake()->imageUrl(),
            'age' =>fake()->numberBetween(15,45),
            "mobile_no"=>fake()->phoneNumber(),
            "role" => 1,
            "password"=> Hash::make("password")
        ]); User::factory()->create([
            'firstName'=> fake()->name(),
            'lastName'=>'',
            "user_name"=> fake()->email(),
            'sex'=> "g",
            'address'=>fake()->address(),
            'imageUrl'=>fake()->imageUrl(),
            'age' =>fake()->numberBetween(15,45),
            "mobile_no"=>fake()->phoneNumber(),
            "role" => 1,
            "password"=> Hash::make("password")
        ]);
    }
}
