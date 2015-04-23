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
			$table->text('description');
			$table->boolean('reserved');
            $table->integer('rooms_count');
            $table->decimal('price_construction', 10, 2);
            $table->decimal('price_production', 10, 2);
            $table->decimal('price_cost', 10, 2);
            $table->decimal('price_rack', 10, 2);
            $table->integer('number_of_people');
            $table->integer('surface');
            $table->integer('bed_kids');
            $table->integer('bed_camp');
            $table->integer('bed_additional');
            $table->integer('bed_total_additional');
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
