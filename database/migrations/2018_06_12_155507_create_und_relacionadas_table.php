<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUndRelacionadasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('und_relacionadas', function(Blueprint $table)
		{
			$table->integer('undre_id', true);
			$table->integer('undre_und_id');
			$table->string('undre_nome', 40);
			$table->decimal('undre_valor', 10);
			$table->integer('undre_emp_id');
			$table->string('undre_no_acento', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('und_relacionadas');
	}

}
