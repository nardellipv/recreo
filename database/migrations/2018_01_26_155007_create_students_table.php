<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('dni');
            $table->date('birth_date');
            $table->string('phone');
            $table->string('classroom');
            $table->enum('level', ['1', '2']);
            $table->string('first_note');
            $table->string('second_note');
            $table->string('total_note');
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
        Schema::dropIfExists('students');
    }
}
