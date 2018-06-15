<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdutoGeneroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produto_genero', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome', 40);
			$table->integer('id_empresa')->index('id_empresa');
			$table->string('referencia', 45)->nullable();
			$table->string('midia', 45)->nullable();
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
		Schema::drop('produto_genero');
	}

}
