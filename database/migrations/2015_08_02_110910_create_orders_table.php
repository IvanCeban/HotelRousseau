<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('session_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->dateTime('checkin_date');
            $table->dateTime('checkout_date');
            $table->smallInteger('nights');
            $table->smallInteger('adults');
            $table->smallInteger('kids');
            $table->smallInteger('infants');
            $table->text('ages');
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
        Schema::drop('orders');
    }
}
