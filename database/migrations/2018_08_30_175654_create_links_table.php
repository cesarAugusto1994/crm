<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo_links', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('modelo_id')->unsigned()->index();
            $table->foreign('modelo_id')->references('id')->on('modelos');

            $table->integer('tipo_id')->unsigned()->index();
            $table->foreign('tipo_id')->references('id')->on('modelo_link_tipos');

            $table->string('link')->nullable();
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
        Schema::dropIfExists('modelo_links');
    }
}
