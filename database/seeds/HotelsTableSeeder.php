<?php

use Illuminate\Database\Seeder;
use App\Hotel;

class HotelsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Hotel::truncate();

		// add 1st row
		Hotel::create( [
			'title' => 'Rousseau' ,
		]);

		// add 2nd row
		Hotel::create( [
			'title' => 'Camelot' ,
		] );
	}

}