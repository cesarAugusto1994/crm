<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdministracaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('administracao', function(Blueprint $table)
		{
			$table->integer('adm_id', true);
			$table->string('adm_nome', 60);
			$table->string('adm_login', 50);
			$table->string('adm_senha', 128);
			$table->smallInteger('adm_nivel');
			$table->smallInteger('adm_empresa');
			$table->smallInteger('adm_status');
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
		Schema::drop('administracao');
	}

}
