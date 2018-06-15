<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFuncionariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcionarios', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome', 40);
			$table->string('email', 40);
			$table->string('usuario', 40);
			$table->string('senha', 40);
			$table->integer('nivel');
			$table->integer('status');
			$table->integer('id_area')->index('id_area');
			$table->integer('id_empresa')->index('id_empresa');
			$table->char('log', 1);
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
		Schema::drop('funcionarios');
	}

}
