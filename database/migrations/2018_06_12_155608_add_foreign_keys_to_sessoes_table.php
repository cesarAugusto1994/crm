<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSessoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sessoes', function(Blueprint $table)
		{
			$table->foreign('usuario_id', 'usuario')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sessoes', function(Blueprint $table)
		{
			$table->dropForeign('usuario');
		});
	}

}
