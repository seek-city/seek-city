<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVenuesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->char('state', 2);
            $table->char('zipcode', 5);
            $table->string('phone_number')->nullable();
            $table->boolean('parking_available')->nullable();
            $table->time('open_hour')->nullable();
            $table->time('close_hour')->nullable();
            $table->string('website_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('google_url')->nullable();
            $table->string('twitter_handle')->nullable();
            $table->string('image_url')->nullable();
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
        Schema::drop('venues');
    }

}
