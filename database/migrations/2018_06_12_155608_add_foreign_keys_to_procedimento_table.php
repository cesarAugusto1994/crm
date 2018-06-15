<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProcedimentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('procedimento', function(Blueprint $table)
		{
			$table->foreign('id_tipo', 'procedimento_ibfk_1')->references('id')->on('tipo_manifestacao')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('procedimento', function(Blueprint $table)
		{
			$table->dropForeign('procedimento_ibfk_1');
		});
	}

}
