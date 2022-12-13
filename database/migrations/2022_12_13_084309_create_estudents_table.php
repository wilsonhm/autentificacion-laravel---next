<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigEstudent');
            $table->string('name');
            $table->string('fatherlastname');
            $table->string('motherlastname');
            $table->string('dni');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
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
        Schema::dropIfExists('estudents');
    }
}
