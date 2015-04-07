<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rooms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('room_type_id')->unsigned();
			$table->foreign('room_type_id')->references('id')->on('room_types');
			/*$table->integer('hotels_id')->unsigned();
			$table->foreign('hotels_id')->references('id')->on('hotels');*/
			$table->string('title');
			$table->decimal('price', 10, 2);
			$table->text('description');
			$table->boolean('reserved');
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
		Schema::drop('rooms');
	}

}
