<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClienteProdutosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cliente_produtos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cliente_id')->unsigned();
			$table->integer('produto_id');
			$table->integer('chamado_id')->nullable();
			$table->boolean('ativo')->default(1);
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
		Schema::drop('cliente_produtos');
	}

}
