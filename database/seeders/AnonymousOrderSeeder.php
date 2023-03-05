<?php

namespace Database\Seeders;

use App\Models\AnonymousOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnonymousOrderSeeder extends Seeder
{

   private function orderStatus(int $index){
    $orderStatus = ["pending","verified","processing","shipping","delivered", "cancelled"];
    return $orderStatus[$index];
}
private function paymentStatus(int $index){
    $paymentStatus = array('unpaid', 'paid');
    return $paymentStatus[$index];
}
private function paymentMethod(int $index){
    $paymentMethod = ['cash','card','online'];
    return $paymentMethod[$index];
}
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnonymousOrder::factory()->create([
            "shipping_cost" => fake()->numberBetween(50,150),
            "discount_amount" => fake()->numberBetween(10,50),
            'total'=>fake()->numberBetween(500,1000),
            'mobile_number'=>fake()->phoneNumber(),
            "city"=>fake()->city(),
            'name' =>fake()->name(),
            "locality" => fake()->address(),
            "order_status" => $this->orderStatus(fake()->numberBetween(0,5)),
            "payment_status"=>$this->paymentStatus(fake()->numberBetween(0,1)),
            "payment_method"=> $this->paymentMethod(fake()->numberBetween(0,2)),
            'driver_number' => fake()->phoneNumber(),
            "user_id" => fake()->numberBetween(1,4),
            "shipping_pricing_id" =>fake()->numberBetween(1,3),
            'vendor_id' => fake()->numberBetween(1,3),
        ]);
        AnonymousOrder::factory()->create([
            "shipping_cost" => fake()->numberBetween(50,150),
            "discount_amount" => fake()->numberBetween(10,50),
            'total'=>fake()->numberBetween(500,1000),
            'mobile_number'=>fake()->phoneNumber(),
            "city"=>fake()->city(),
            'name' =>fake()->name(),

            "locality" => fake()->address(),
            "order_status" => $this->orderStatus(fake()->numberBetween(0,5)),
            "payment_status"=>$this->paymentStatus(fake()->numberBetween(0,1)),
            "payment_method"=> $this->paymentMethod(fake()->numberBetween(0,2)),
            'driver_number' => fake()->phoneNumber(),
            "user_id" => fake()->numberBetween(1,4),
            "shipping_pricing_id" =>fake()->numberBetween(1,3),
            'vendor_id' => fake()->numberBetween(1,3),

        ]);
        AnonymousOrder::factory()->create([
            "shipping_cost" => fake()->numberBetween(50,150),
            "discount_amount" => fake()->numberBetween(10,50),
            'total'=>fake()->numberBetween(500,1000),
            'mobile_number'=>fake()->phoneNumber(),
            'name' =>fake()->name(),
            "city"=>fake()->city(),
            "locality" => fake()->address(),
            "order_status" => $this->orderStatus(fake()->numberBetween(0,5)),
            "payment_status"=>$this->paymentStatus(fake()->numberBetween(0,1)),
            "payment_method"=> $this->paymentMethod(fake()->numberBetween(0,2)),
            'driver_number' => fake()->phoneNumber(),
            "user_id" => fake()->numberBetween(1,4),
            "shipping_pricing_id" =>fake()->numberBetween(1,3),
            'vendor_id' => fake()->numberBetween(1,3),

        ]);
        AnonymousOrder::factory()->create([
            "shipping_cost" => fake()->numberBetween(50,150),
            "discount_amount" => fake()->numberBetween(10,50),
            'total'=>fake()->numberBetween(500,1000),
            'mobile_number'=>fake()->phoneNumber(),
            'name' =>fake()->name(),
            "city"=>fake()->city(),
            "locality" => fake()->address(),
            "order_status" => $this->orderStatus(fake()->numberBetween(0,5)),
            "payment_status"=>$this->paymentStatus(fake()->numberBetween(0,1)),
            "payment_method"=> $this->paymentMethod(fake()->numberBetween(0,2)),
            'driver_number' => fake()->phoneNumber(),
            "user_id" => fake()->numberBetween(1,4),
            "shipping_pricing_id" =>fake()->numberBetween(1,3),
            'vendor_id' => fake()->numberBetween(1,3),

        ]);
        AnonymousOrder::factory()->create([
            "shipping_cost" => fake()->numberBetween(50,150),
            "discount_amount" => fake()->numberBetween(10,50),
            'total'=>fake()->numberBetween(500,1000),
            'mobile_number'=>fake()->phoneNumber(),
            'name' =>fake()->name(),
            "city"=>fake()->city(),
            "locality" => fake()->address(),
            "order_status" => $this->orderStatus(fake()->numberBetween(0,5)),
            "payment_status"=>$this->paymentStatus(fake()->numberBetween(0,1)),
            "payment_method"=> $this->paymentMethod(fake()->numberBetween(0,2)),
            'driver_number' => fake()->phoneNumber(),
            "user_id" => fake()->numberBetween(1,4),
            'vendor_id' => fake()->numberBetween(1,3),
            "shipping_pricing_id" =>fake()->numberBetween(1,3),
        ]);
        AnonymousOrder::factory()->create([
            "shipping_cost" => fake()->numberBetween(50,150),
            "discount_amount" => fake()->numberBetween(10,50),
            'total'=>fake()->numberBetween(500,1000),
            'mobile_number'=>fake()->phoneNumber(),
            'name' =>fake()->name(),
            "city"=>fake()->city(),
            "locality" => fake()->address(),
            "order_status" => $this->orderStatus(fake()->numberBetween(0,5)),
            "payment_status"=>$this->paymentStatus(fake()->numberBetween(0,1)),
            "payment_method"=> $this->paymentMethod(fake()->numberBetween(0,2)),
            'driver_number' => fake()->phoneNumber(),
            "user_id" => fake()->numberBetween(1,4),
            "shipping_pricing_id" =>fake()->numberBetween(1,3),
            'vendor_id' => fake()->numberBetween(1,3),

        ]);
        AnonymousOrder::factory()->create([
            "shipping_cost" => fake()->numberBetween(50,150),
            "discount_amount" => fake()->numberBetween(10,50),
            'total'=>fake()->numberBetween(500,1000),
            'mobile_number'=>fake()->phoneNumber(),
            'name' =>fake()->name(),
            "city"=>fake()->city(),
            "locality" => fake()->address(),
            "order_status" => $this->orderStatus(fake()->numberBetween(0,5)),
            "payment_status"=>$this->paymentStatus(fake()->numberBetween(0,1)),
            "payment_method"=> $this->paymentMethod(fake()->numberBetween(0,2)),
            'driver_number' => fake()->phoneNumber(),
            "user_id" => fake()->numberBetween(1,4),
            "shipping_pricing_id" =>fake()->numberBetween(1,3),
            'vendor_id' => fake()->numberBetween(1,3),

        ]);
    }
}
