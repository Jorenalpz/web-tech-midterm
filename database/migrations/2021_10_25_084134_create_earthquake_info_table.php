<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEarthquakeInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earthquake_info', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->decimal('intensity');
            $table->dateTime('date_time_happen');
            $table->integer('number_of_casualty');
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
        Schema::dropIfExists('earthquake_info');
    }
}
