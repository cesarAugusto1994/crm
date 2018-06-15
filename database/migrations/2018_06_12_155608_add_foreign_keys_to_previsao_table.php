<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPrevisaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('previsao', function(Blueprint $table)
		{
			$table->foreign('id_classificacao', 'previsao_ibfk_1')->references('id')->on('classificacao')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('previsao', function(Blueprint $table)
		{
			$table->dropForeign('previsao_ibfk_1');
		});
	}

}
