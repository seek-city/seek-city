<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivityMoodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_mood', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('activity_id')->unsigned()->index();
			$table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('mood_id')->unsigned()->index();
			$table->foreign('mood_id')->references('id')->on('moods')->onDelete('cascade')->onUpdate('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_mood');
	}

}
