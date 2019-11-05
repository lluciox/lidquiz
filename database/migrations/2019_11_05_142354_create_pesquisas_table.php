<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesquisasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesquisas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('matricula');
            $table->string('nome');
            $table->string('nomesup');
            $table->string('Q1',1);
            $table->string('Q2',1);
            $table->string('Q3',1);
            $table->string('Q4',1);
            $table->string('Q5',1);
            $table->string('Q6',1);
            $table->string('Q7',1);
            $table->string('Q8',1);
            $table->string('Q9',1);
            $table->string('Q0',1);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesquisas');
    }
}
