<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColomnsToRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('db_house_rooms', function (Blueprint $table) {
            $table->integer('house_id')->after('user_id');
            $table->float('cubic_meters')->after('surface')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('db_house_rooms', function (Blueprint $table) {
            $table->dropColumn('house_id');
            $table->dropColumn('cubic_meters');
        });
    }
}
