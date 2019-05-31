<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Inicial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            /*Schema::create('users', function (Blueprint $table) {
              $table->bigIncrements('id')->unsigned();
              $table->string('name', 255);
              $table->string('last name', 255);
              $table->string('email')->unique();
              $table->string('password');
              $table->boolean('admin')->default(0);
              $table->timestamps();
          });*/

            Schema::create('products', function (Blueprint $table) {
              $table->bigIncrements('id')->unsigned();
              $table->string('name');
              $table->string('image')->nullable();
              $table->decimal('price', 20, 2)->unsigned();
              $table->text('description')->nullable();
              $table->decimal('rating')->nullable();
              $table->integer('category_id');
              $table->string('token');
              $table->timestamps();
          });

            Schema::create('address', function (Blueprint $table) {
              $table->bigIncrements('id')->unsigned();
              $table->string('street_address');
              $table->integer('postal_code')->nullable();
              $table->string('city');
              $table->timestamps();
          });

            Schema::create('categories', function (Blueprint $table) {
              $table->bigIncrements('id')->unsigned();
              $table->string('name');
              $table->timestamps();
          });

            Schema::create('user_addresses', function (Blueprint $table) {
              $table->bigIncrements('id')->unsigned();
              $table->integer('user_id');
              $table->integer('address_id');
              $table->timestamps();
          });

            Schema::create('cart', function (Blueprint $table) {
              $table->bigIncrements('id')->unsigned();
              $table->integer('user_id');
              $table->integer('product_id');
              $table->integer('address_id');
              $table->integer('amount')->default(0);
              $table->timestamps();
          });

          //Si en otra migracion quisieramos cambiar alguno de estos datos
          //tenemos que usar TABLE en vez de CREATE

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
