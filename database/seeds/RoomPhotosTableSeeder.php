<?php

use Illuminate\Database\Seeder;
use App\RoomPhoto;

class RoomPhotosTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for($i=0; $i<800; $i++){
			RoomPhoto::create([
				'room_id' => DB::table('rooms')->orderBy(DB::raw('RAND()'))->first()->id,
				'path'=> '/admins/img/gallery/'.rand(1,5).'.jpg'
			]);
		}
	}

}