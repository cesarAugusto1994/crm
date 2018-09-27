<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seabra_id')->nullable();
            $table->string('titulo');
            $table->string('localidade')->nullable();
            $table->string('referencia')->nullable();
            $table->string('incorporacao')->nullable();
            $table->string('construcao')->nullable();
            $table->string('arquitetura')->nullable();
            $table->integer('torres')->nullable();
            $table->integer('unidades')->nullable();
            $table->integer('elevadores')->nullable();
            $table->integer('dormitorios')->nullable();
            $table->integer('suites')->nullable();
            $table->integer('vagas')->nullable();
            $table->string('areas')->nullable();
            $table->string('estacoes_proximas')->nullable();
            $table->date('previsao_entrega')->nullable();
            $table->float('faixa_preco_ini', 12,2)->nullable();
            $table->float('faixa_preco_fim', 12,2)->nullable();
            $table->integer('fases_obra')->nullable();
            $table->text('areas_comuns')->nullable();
            $table->boolean('ativo')->default(true);
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
        Schema::dropIfExists('imoveis');
    }
}
