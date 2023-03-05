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
        Schema::create('anonymous_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('shipping_cost')->nullable(false)->default(0);
            $table->integer("discount_amount")->nullable(false)->default(0);
            $table->integer("total")->nullable(false);
            $table->string('mobile_number')->nullable();
            $table->string('name');
            $table->string('city')->nullable();
            $table->string('locality')->nullable(true);
            $table->string('additional_discount_amount')->default(0);
            $table->string("additional_discount_reason")->nullable();
            $table->string("additional_charge_amount")->default(0);
            $table->string('additional_charge_reason')->nullable();
            $table->string("order_status")->nullable(false)->default("pending")->comment("status possibilities || 'pending', 'verified', 'processing', 'shipping', 'delivered','cancelled'");
            $table->string("payment_status")->nullable(false)->default("unpaid")->comment("status possibilities || 'unpaid', 'paid'");
            $table->string("payment_method")->default("cash")->comment("payment method possibilities || 'cash', 'card', 'online'");
            $table->string("driver_number")->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('vendor_id')->nullable(false);
            $table->integer('shipping_pricing_id')->nullable();
            $table->foreign('shipping_pricing_id')->references("shipping_pricing_id")->on("shipping_pricings")->onDelete('restrict');
            $table->foreign('user_id')->references("user_id")->on("users")->onDelete("restrict");
            $table->foreign('vendor_id')->references("vendor_id")->on("food_main_vendors")->onDelete("restrict");
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
        Schema::dropIfExists('anonymous_orders');
    }
};
