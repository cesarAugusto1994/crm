<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clientes', function(Blueprint $table)
		{
			$table->foreign('tipo', 'cliente')->references('id')->on('tipo_cliente')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('forma_tratamento', 'clientes_ibfk_1')->references('id')->on('forma_tratamento')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_empresa', 'clientes_ibfk_2')->references('id')->on('empresas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clientes', function(Blueprint $table)
		{
			$table->dropForeign('cliente');
			$table->dropForeign('clientes_ibfk_1');
			$table->dropForeign('clientes_ibfk_2');
		});
	}

}
