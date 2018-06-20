<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChamadoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chamado', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('produto_servico')->nullable();
			$table->integer('manifestacao')->nullable();
			$table->integer('grupo_manifestacao')->nullable();
			$table->integer('tipo_manifestacao')->nullable();
			$table->integer('id_cliente')->nullable();
			$table->integer('id_usuario')->nullable();
			$table->text('descricao', 65535)->nullable();
			$table->integer('classificacao')->nullable();
			$table->integer('area_atendimento')->nullable();
			$table->integer('pessoa_responsavel')->nullable();
			$table->date('abertura_chamado');
			$table->date('atendimento_chamado')->nullable();
			$table->date('conclusao_chamado')->nullable();
			$table->time('hora_atendimento')->nullable();
			$table->date('previsao_conclusao')->nullable();
			$table->text('conclusao', 65535)->nullable();
			$table->integer('situacao')->default(1);
			$table->integer('id_empresa')->index('id_empresa');
			$table->boolean('arquivado')->default(0);
			$table->string('empreendimento', 120)->nullable();
			$table->string('midia', 80)->nullable();
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
		Schema::drop('chamado');
	}

}
