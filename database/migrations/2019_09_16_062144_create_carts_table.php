<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            //merupakan deklasrasi kolom untuk foreng key
            $table->unsignedBigInteger('user_id');
            //merupakan memperkenalkan user_id yang merupakan foreign key dari id di dalam table users
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('product_id');
            //merupakan memperkenalkan user_id yang merupakan foreign key dari id di dalam table users
            $table->foreign('product_id')->references('id')->on('products');

            $table->integer('qty');
            $table->integer('subtotal');
           
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
        Schema::dropIfExists('carts');
    }
}
