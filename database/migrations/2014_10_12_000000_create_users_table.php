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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('user_id',true);
            $table->string('user_name')->unique();
            $table->string('password')->nullable('false');
            $table->string('sex')->nullable(true);
            $table->string('firstName')->nullable(false);
            $table->string('lastName')->nullable(false);
            $table->string('address')->nullable(false);
            $table->string('imageUrl')->nullable(true);
            $table->integer('age')->nullable(false);
            $table->string('mobile_no')->nullable(false)->unique();
            $table->string('auth_type')->default();
            $table->string('token')->nullable();
            $table->tinyInteger('role')->default(1)->comment('0 = admin, 1 = user, 2 = driver');
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
        Schema::dropIfExists('users');
    }
};
