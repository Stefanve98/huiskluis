<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('type_id');
            $table->string('country');
            $table->string('city');
            $table->string('zip_code');
            $table->string('street');
            $table->tinyInteger('number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_addresses');
    }
}
