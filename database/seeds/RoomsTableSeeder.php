<?php

use Illuminate\Database\Seeder;
use App\Room;
use Faker\Factory as Faker;

class RoomsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
		//Room::truncate();
		// add 1st row
		for($i=0;$i<200;$i++){
			Room::create( [
				'title' => $faker->word,
				'description' => $faker->sentence,
				'room_types_id' => rand(1,4)
				/*'hotels_id' => 1*/
			]);
		}
	}

}