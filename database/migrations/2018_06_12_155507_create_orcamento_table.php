<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrcamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orcamento', function(Blueprint $table)
		{
			$table->integer('orc_id', true);
			$table->integer('orc_emp_id');
			$table->integer('orc_func_id');
			$table->integer('orc_cli_id');
			$table->integer('orc_chm_id');
			$table->date('orc_gen_data');
			$table->time('orc_gen_hora');
			$table->integer('orc_frm_pgto');
			$table->integer('orc_parcelamento');
			$table->decimal('orc_valor', 10);
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
		Schema::drop('orcamento');
	}

}
