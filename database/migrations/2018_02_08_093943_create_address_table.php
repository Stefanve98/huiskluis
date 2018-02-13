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
        Schema::create('db_house_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country')->default('NL');
            $table->string('zip_code')->default(null);
            $table->string('city')->default(null);
            $table->string('street')->default(null);
            $table->tinyInteger('number')->default(null);
            $table->string('additional')->nullable();
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
        Schema::dropIfExists('db_house_addresses');
    }
}
