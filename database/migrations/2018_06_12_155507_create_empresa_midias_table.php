<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpresaMidiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empresa_midias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('empresa_id');
			$table->integer('cliente_id');
			$table->boolean('ativo')->default(1);
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
		Schema::drop('empresa_midias');
	}

}
