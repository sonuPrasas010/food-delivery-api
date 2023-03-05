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
        Schema::create('food_categories',function(Blueprint $table){
            $table->integer('food_id')->nullable(false);
            $table->integer('category_id')->nullable(false);
            $table->foreign('food_id')->references('food_id')->on("foods")->onDelete('cascade');
            $table->foreign('category_id')->references('category_id')->on("food_main_categories")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_categories');
    }
};
