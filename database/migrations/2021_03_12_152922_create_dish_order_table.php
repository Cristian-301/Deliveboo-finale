<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dish_order', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('dish_id');
          $table->unsignedBigInteger('order_id');

          //relation
          $table->foreign('dish_id')
          ->references('id')
          ->on('dishes')
          ->onDelete('cascade');

          //relation
          $table->foreign('order_id')
          ->references('id')
          ->on('orders')
          ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dish_order');
    }
}
