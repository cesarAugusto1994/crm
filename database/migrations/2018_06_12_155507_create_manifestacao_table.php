<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManifestacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('manifestacao', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('descricao', 40);
			$table->integer('id_prod_serv')->index('id_prod_serv');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('manifestacao');
	}

}
