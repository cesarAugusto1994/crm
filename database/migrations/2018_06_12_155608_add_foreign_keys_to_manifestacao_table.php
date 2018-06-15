<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToManifestacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('manifestacao', function(Blueprint $table)
		{
			$table->foreign('id_prod_serv', 'manifestacao_ibfk_1')->references('id')->on('produto_genero')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('manifestacao', function(Blueprint $table)
		{
			$table->dropForeign('manifestacao_ibfk_1');
		});
	}

}
