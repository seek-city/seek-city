<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressColumnsToActivitiesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activities', function(Blueprint $table)
        {
            $table->string('address');
            $table->string('city');
            $table->string('state', 2);
            $table->string('zipcode', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('address');
        $table->dropColumn('city');
        $table->dropColumn('state');
        $table->dropColumn('zipcode');
    }

}
