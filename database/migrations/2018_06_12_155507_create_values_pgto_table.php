<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateValuesPgtoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('values_pgto', function(Blueprint $table)
		{
			$table->integer('vls_id', true);
			$table->integer('vls_orc_id');
			$table->float('vls_value', 10);
			$table->date('vls_date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('values_pgto');
	}

}
