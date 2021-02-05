<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_times', function (Blueprint $table) {
            $table->increments('id');
            $table->string('days');
            $table->time('time1');
            $table->time('time2');
            $table->time('time3');
            $table->time('time4');
            $table->time('time5');
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
        Schema::dropIfExists('service_times');
    }
}
