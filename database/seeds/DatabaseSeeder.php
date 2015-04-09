<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		 $this->call('PengajarsTableSeeder');
		 $this->call('MuridsTableSeeder');
		 $this->call('MengajarsTableSeeder');
	}

}
