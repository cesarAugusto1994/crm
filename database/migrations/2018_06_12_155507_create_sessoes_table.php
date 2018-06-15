<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSessoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sessoes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('sessao_id', 100);
			$table->integer('usuario_id')->index('usuario_idx');
			$table->integer('inicio');
			$table->integer('atual');
			$table->integer('status');
			$table->string('ip', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sessoes');
	}

}
