<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAreaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('area', function(Blueprint $table)
		{
			$table->foreign('id_empresa', 'area_ibfk_1')->references('id')->on('empresas')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('area', function(Blueprint $table)
		{
			$table->dropForeign('area_ibfk_1');
		});
	}

}
