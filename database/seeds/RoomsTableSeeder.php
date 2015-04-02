<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Room::truncate();
		// add 1st row
		for($i=0;$i<200;$i++){
			Room::create( [
				'title' => 'RoomTitle',
				'description' => 'Description',
				/*'room_type_id' => 1,
				'hotel_id' => 1*/
			]);
		}
	}

}