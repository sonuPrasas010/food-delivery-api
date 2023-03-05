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
        Schema::create('anonymous_product_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anonymous_order_id');
            $table->integer('food_id')->nullable();
            $table->integer('price');
            $table->integer('discount_amount');
            $table->integer('total_amount');
            $table->integer('ordered_quantity')->default(0);
            $table->string('food_name');
            $table->string('image_url');
            $table->string("small_image_url");
            $table->timestamps();
            $table->foreign('food_id')->references("food_id")->on("foods")->onDelete("restrict");
            $table->foreign("anonymous_order_id")->references('id')->on("anonymous_orders")->onDelete("restrict");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anonymous_product_orders');
    }


};
