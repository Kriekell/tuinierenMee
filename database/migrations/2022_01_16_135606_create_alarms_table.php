<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alarms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->string('time');
            $table->string('text');
            $table->string('user_id');
            $table->string('garden_id');
            // $table->$table->date('date');
            // $table->$table->timeTz('time', $precision = 0);
            // $table->text('text');
            // $table->int('user_id');
            // $table->int('garden_id');
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
        Schema::dropIfExists('alarms');
    }
}
