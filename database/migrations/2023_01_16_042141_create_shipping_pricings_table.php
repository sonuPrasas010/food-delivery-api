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
        Schema::create('shipping_pricings', function (Blueprint $table) {
            $table->integer("shipping_pricing_id",true);
            $table->string('name')->nullable(false)->unique();
            $table->integer("shipping_cost")->nullable(false);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipping_pricings');
    }
};
