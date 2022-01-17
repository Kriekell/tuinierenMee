<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('text');
            $table->string('status_id');
            $table->string('user_id');
            $table->string('garden_id');
            // $table->string('subject');
            // $table->text('text');
            // $table->int('status_id');
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
        Schema::dropIfExists('notes');
    }
}
