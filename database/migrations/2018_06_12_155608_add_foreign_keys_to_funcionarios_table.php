<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFuncionariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('funcionarios', function(Blueprint $table)
		{
			$table->foreign('id_area', 'funcionarios_ibfk_1')->references('id')->on('area')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('id_empresa', 'funcionarios_ibfk_2')->references('id')->on('empresas')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('funcionarios', function(Blueprint $table)
		{
			$table->dropForeign('funcionarios_ibfk_1');
			$table->dropForeign('funcionarios_ibfk_2');
		});
	}

}
