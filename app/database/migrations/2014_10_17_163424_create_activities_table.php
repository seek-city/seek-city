<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivitiesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('body');
            $table->integer('price');
            $table->dateTime('activity_date');
            $table->string('image_path');
            $table->integer('user_id');
            $table->integer('venue_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activities');
    }

}
