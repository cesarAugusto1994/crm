<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrevisaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('previsao', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('descricao', 40);
			$table->integer('id_classificacao')->index('id_classificacao');
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
		Schema::drop('previsao');
	}

}
