<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agenda', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('area_id')->unsigned()->index();
			$table->foreign('area_id')->references('id')->on('area');

			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

			$table->datetime('data_hora');
			$table->string('descricao')->nullable();
			$table->string('local')->nullable();
			$table->enum('status', ['pendente', 'realizado'])->default('pendente');
			$table->boolean('ativo')->default(true);

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
		Schema::drop('agenda');
	}

}
