<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UsersTableSeeder');
		$this->call('ActivitiesTableSeeder');
		// $this->call('CategoriesTableSeeder');
		// $this->call('MoodsTableSeeder');
		// $this->call('VenuesTableSeeder');
	}

}
