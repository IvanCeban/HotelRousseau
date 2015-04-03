<?php

use Illuminate\Database\Seeder;
use App\RoomType;

class RoomTypesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//RoomType::truncate();

		// add 1st row
		RoomType::create( [
			'title' => 'Single' ,
		]);

		// add 2nd row
		RoomType::create( [
			'title' => 'Double' ,
		] );

		RoomType::create( [
			'title' => 'Triple' ,
		] );

		RoomType::create( [
			'title' => 'Apartment' ,
		] );
	}

}