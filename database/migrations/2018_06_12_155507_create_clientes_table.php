<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('tipo')->index('tipo');
			$table->boolean('pessoa');
			$table->string('cpf', 20);
			$table->integer('forma_tratamento')->index('forma');
			$table->string('nome', 100);
			$table->boolean('sexo');
			$table->timestamp('inclusao')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('ultima_alteracao')->nullable();
			$table->boolean('evitar_email')->default(0);
			$table->boolean('evitar_telefone')->default(0);
			$table->boolean('evitar_carta')->default(0);
			$table->boolean('evitar_sms')->default(0);
			$table->integer('id_empresa')->index('id_empresa');
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
		Schema::drop('clientes');
	}

}
