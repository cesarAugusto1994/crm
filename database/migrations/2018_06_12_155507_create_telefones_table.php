<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTelefonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('telefones', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('cliente_id')->index('cliente_idx');
			$table->integer('tipo')->index('tipo_idx');
			$table->integer('ddi');
			$table->integer('ddd');
			$table->string('telefone', 15);
			$table->string('ramal', 10);
			$table->string('principal', 3);
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
		Schema::drop('telefones');
	}

}
