<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_orders', function (Blueprint $table) {
            $table->integer('order_id');
            $table->integer('food_id');
            $table->integer('price');
            $table->integer('discount_amount');
            $table->integer('amount');
            $table->integer('ordered_quantity')->default(1);
            $table->string('food_name');
            $table->string('image_url');
            $table->string("small_image_url");
            $table->timestamps();
            $table->foreign('food_id')->references("food_id")->on("foods")->onDelete("restrict");
            $table->foreign("order_id")->references('order_id')->on("orders")->onDelete("restrict");
            // $table->unique(/['order_id, food_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_orders');
    }
};
