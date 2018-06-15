<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrcamentoItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orcamento_item', function(Blueprint $table)
		{
			$table->integer('orcitm_id', true);
			$table->integer('orcitm_orc');
			$table->integer('orcitm_emp_id');
			$table->integer('orcitm_func_id');
			$table->integer('orcitm_num_prod');
			$table->integer('orcitm_unidade');
			$table->integer('orcitm_qtde_unidade');
			$table->integer('orcitm_qtde');
			$table->decimal('orcitm_preco', 10);
			$table->date('orcitm_pz_entrega');
			$table->date('orcitm_dt_pedido');
			$table->string('orcitm_descricao', 100);
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
		Schema::drop('orcamento_item');
	}

}
