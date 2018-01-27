<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('dni');
            $table->string('space');
            $table->enum('level', ['1', '2']);
            $table->string('phone');
            $table->string('email', 160)->unique();
            $table->enum('first_time', ['SI', 'NO']);

            $table->integer('school_id')->unsigned();

            $table->timestamps();

            // Relaciones

            $table->foreign('school_id')->references('id')->on('schools');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
