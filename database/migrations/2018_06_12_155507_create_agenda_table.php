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
			$table->integer('agd_id', true);
			$table->integer('agd_func_area');
			$table->integer('agd_func_id');
			$table->date('agd_lemb_data');
			$table->time('agd_lemb_hora');
			$table->string('agd_nome', 40);
			$table->string('agd_local', 40);
			$table->date('agd_data');
			$table->time('agd_hora');
			$table->char('agd_status', 1);
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
