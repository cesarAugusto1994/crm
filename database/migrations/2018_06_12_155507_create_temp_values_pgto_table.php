<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTempValuesPgtoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('temp_values_pgto', function(Blueprint $table)
		{
			$table->integer('tmp_id', true);
			$table->string('tmp_rowid', 64);
			$table->integer('tmp_func_id');
			$table->decimal('tmp_value', 10);
			$table->date('tmp_date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('temp_values_pgto');
	}

}
