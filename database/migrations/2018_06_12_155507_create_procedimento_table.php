<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProcedimentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('procedimento', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('descricao', 65535);
			$table->integer('id_tipo')->index('id_tipo');
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
		Schema::drop('procedimento');
	}

}
