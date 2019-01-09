<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailling_logs', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cliente_id')->unsigned()->index();
            $table->foreign('cliente_id')->references('id')->on('clientes');

            $table->integer('propaganda_id')->unsigned()->index();
            $table->foreign('propaganda_id')->references('id')->on('propagandas');

            $table->integer('chamado_id')->nullable();

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
        Schema::dropIfExists('mailling_logs');
    }
}
