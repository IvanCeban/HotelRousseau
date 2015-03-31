<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::truncate();

		// add 1st row
		User::create( [
			'name' => 'Vadim' ,
			'email' => 'cojocaru.vadim@gmail.com' ,
			'password' => bcrypt('asdfgh') ,
		]);

		// add 2nd row
		User::create( [
			'name' => 'Phillippe' ,
			'email' => 'p.pitton@voodoo-studio.ch' ,
			'password' => bcrypt('asdfgh') ,
		] );
	}

}