<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipologiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo_tipologias', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('modelo_id')->unsigned()->index();
            $table->foreign('modelo_id')->references('id')->on('modelos');

            $table->string('dormitorios')->nullable();
            $table->string('suites')->nullable();
            $table->string('vagas')->nullable();
            $table->string('metros')->nullable();
            $table->string('local')->nullable();

            $table->string('nome');
            $table->string('boolean')->default(true);

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
        Schema::dropIfExists('modelo_tipologias');
    }
}
