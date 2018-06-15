<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClassificacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('classificacao', function(Blueprint $table)
		{
			$table->foreign('id_empresa', 'classificacao_ibfk_1')->references('id')->on('empresas')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('classificacao', function(Blueprint $table)
		{
			$table->dropForeign('classificacao_ibfk_1');
		});
	}

}
