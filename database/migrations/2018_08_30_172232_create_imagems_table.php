<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo_imagens', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('modelo_id')->unsigned()->index();
            $table->foreign('modelo_id')->references('id')->on('modelos');

            $table->string('link')->nullable();
            $table->integer('orderm')->nullable();
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
        Schema::dropIfExists('modelo_imagens');
    }
}
