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
			$table->integer('produto_servico');
			$table->integer('manifestacao');
			$table->integer('grupo_manifestacao');
			$table->integer('tipo_manifestacao');
			$table->integer('id_cliente');
			$table->integer('id_usuario');
			$table->text('descricao', 65535);
			$table->integer('classificacao');
			$table->integer('area_atendimento');
			$table->integer('pessoa_responsavel')->index('pessoa_responsavel_2');
			$table->date('abertura_chamado');
			$table->date('atendimento_chamado')->nullable();
			$table->date('conclusao_chamado')->nullable();
			$table->time('hora_atendimento')->nullable();
			$table->date('previsao_conclusao')->nullable();
			$table->text('conclusao', 65535);
			$table->integer('situacao');
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
