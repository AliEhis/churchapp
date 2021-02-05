<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpcomingEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upcoming_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 191);
            $table->string('minister', 100);
            $table->date('date');
            $table->time('time');
            $table->longText('body');
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
        Schema::dropIfExists('upcoming_events');
    }
}
