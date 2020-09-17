<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');

            $table->string('name');
            $table->string('zipcode');
            $table->string('address');
            $table->string('zone');
            $table->string('city');
            $table->string('state');
            $table->string('site');
            $table->string('email');
            $table->string('phone_1');
            $table->string('phone_2')->nullable();
            $table->string('mobile_phone');
            $table->string('cnpj');
            $table->string('ie');
            $table->string('logo')->nullable();
            $table->string('slug');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
