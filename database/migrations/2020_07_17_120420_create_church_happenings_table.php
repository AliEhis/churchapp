<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChurchHappeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('church_happenings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 191);
            $table->text('body');
            $table->string('image', 191);
            $table->string('slug', 191);
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
        Schema::dropIfExists('church_happenings');
    }
}
