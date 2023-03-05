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
        Schema::create('food_main_categories', function (Blueprint $table) {
            $table->integer('category_id',true);
            $table->string('category_name')->nullable(false)->unique();
            $table->string('short_desc')->nullable(true);
            $table->string('description')->nullable(true);
            $table->string('image')->nullable(true);
            $table->string('bg_image')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_main_categories');
    }
};
