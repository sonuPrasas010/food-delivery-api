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
        Schema::create('food_main_vendors', function (Blueprint $table) {
            $table->integer("vendor_id",true);
            $table->string('vendor_name')->nullable(false)->unique();
            $table->string('vendor_email')->nullable(true);
            $table->string('vendor_phone')->nullable(false);
            $table->string('vendor_address')->nullable(true);
            $table->string('vendor_image')->nullable(false);
            $table->string('vendor_image_bg')->nullable();
            $table->string('vendor_description')->nullable();
            $table->boolean('status')->default(true)->nullable(false);
            $table->timestamps();
            $table->integer('category_id')->nullable(false);
            $table->foreign('category_id')->references('category_id')->on('food_main_categories')->onDelete('restrict');

        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_main_vendors');
    }
};
