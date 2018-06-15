<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGrupoManifestacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('grupo_manifestacao', function(Blueprint $table)
		{
			$table->foreign('id_manifestacao', 'id_manifestacao')->references('id')->on('manifestacao')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('grupo_manifestacao', function(Blueprint $table)
		{
			$table->dropForeign('id_manifestacao');
		});
	}

}
