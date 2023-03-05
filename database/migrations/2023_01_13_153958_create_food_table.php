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
        Schema::create('foods', function (Blueprint $table) {
            $table->integer('food_id',true);
            $table->string("food_name");
            $table->string("slug")->nullable(false)->unique();
            $table->string('short_desc')->nullable(false);
            $table->string('long_desc')->nullable();
            $table->integer('price')->nullable(false);
            $table->float('discount')->nullable()->default(0);
            $table->string('small_image_url')->nullable(false);
            $table->string('image_url')->nullable(false);
            $table->string('large_image_bg_url')->nullable(true);
            $table->string('small_image_bg_url')->nullable(true);
            $table->timestamps();
            $table->integer('vendor_id')->nullable(false);
            $table->foreign("vendor_id")->references("vendor_id")->on("food_main_vendors")->onDelete("restrict");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
};
