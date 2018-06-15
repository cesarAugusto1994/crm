<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTelefonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('telefones', function(Blueprint $table)
		{
			$table->foreign('cliente_id', 'telefones_ibfk_1')->references('id')->on('clientes')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('tipo', 'telefones_ibfk_2')->references('id')->on('tipo_telefone')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('telefones', function(Blueprint $table)
		{
			$table->dropForeign('telefones_ibfk_1');
			$table->dropForeign('telefones_ibfk_2');
		});
	}

}
