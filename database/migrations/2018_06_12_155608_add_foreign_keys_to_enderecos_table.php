<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEnderecosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('enderecos', function(Blueprint $table)
		{
			$table->foreign('cliente_id', 'enderecos_ibfk_1')->references('id')->on('clientes')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('tipo', 'enderecos_ibfk_2')->references('id')->on('tipo_endereco')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('enderecos', function(Blueprint $table)
		{
			$table->dropForeign('enderecos_ibfk_1');
			$table->dropForeign('enderecos_ibfk_2');
		});
	}

}
