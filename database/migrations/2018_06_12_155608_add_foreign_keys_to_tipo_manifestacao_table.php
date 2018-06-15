<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTipoManifestacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tipo_manifestacao', function(Blueprint $table)
		{
			$table->foreign('id_grupo', 'tipo_manifestacao_ibfk_1')->references('id')->on('grupo_manifestacao')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tipo_manifestacao', function(Blueprint $table)
		{
			$table->dropForeign('tipo_manifestacao_ibfk_1');
		});
	}

}
