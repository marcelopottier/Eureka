<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {    
            $table->id();
            $table->string('patient_name');
            $table->string('parents_name');
            $table->string('email');
            $table->integer('phone');
            $table->string('school_name');
            $table->integer('schooling');
            $table->integer('sex');
            $table->integer('age');
            $table->boolean('particular_session');
            $table->boolean('psicologo');
            $table->boolean('fono');
            $table->boolean('psicomotricista');
            $table->string('observation')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
