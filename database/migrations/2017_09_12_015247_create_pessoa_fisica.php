<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaFisica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas_fisicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sobrenome', 400)->nullable();
            $table->string('cpf', 14)->unique();
            $table->string('rg', 30)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->enum('sexo',['masculino', 'femenino'])->default('masculino');
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
        Schema::dropIfExists('pessoas_fisicas');
    }
}
