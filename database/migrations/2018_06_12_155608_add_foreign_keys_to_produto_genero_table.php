<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProdutoGeneroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produto_genero', function(Blueprint $table)
		{
			$table->foreign('id_empresa', 'produto_genero_ibfk_1')->references('id')->on('empresas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produto_genero', function(Blueprint $table)
		{
			$table->dropForeign('produto_genero_ibfk_1');
		});
	}

}
