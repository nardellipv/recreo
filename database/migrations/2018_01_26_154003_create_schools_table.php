<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->integer('postal_code');
            $table->string('phone');
            $table->enum('type', ['PRIVADA', 'PUBLICA']);
            $table->string('director1');
            $table->string('director2');
            $table->string('email', 160)->unique();
            $table->enum('first_time', ['SI', 'NO']);
            $table->enum('active', ['SI', 'NO'])->default('NO');

            $table->integer('city_id')->unsigned();
            $table->integer('location_id')->unsigned();

            $table->timestamps();

            // Relaciones

            $table->foreign('city_id')->references('id')->on('cities')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');
            // $table->foreign('location_id')->references('id')->on('locations');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
