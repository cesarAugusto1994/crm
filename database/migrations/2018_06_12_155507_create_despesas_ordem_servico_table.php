<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDespesasOrdemServicoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('despesas_ordem_servico', function(Blueprint $table)
		{
			$table->integer('dos_id', true);
			$table->integer('dos_os_id')->nullable();
			$table->string('dos_descricao', 100)->nullable();
			$table->string('dos_despesa_nome', 50)->nullable();
			$table->decimal('dos_valor', 10)->nullable();
			$table->integer('dos_id_empresa')->nullable();
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
		Schema::drop('despesas_ordem_servico');
	}

}
