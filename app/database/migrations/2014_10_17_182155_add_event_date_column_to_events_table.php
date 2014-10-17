<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddEventDateColumnToEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('events', function(Blueprint $table)
		{
			$table->dateTime('event_date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('events', function(Blueprint $table)
		{
			$table->dropColumn('event_date');
		});
	}

}
