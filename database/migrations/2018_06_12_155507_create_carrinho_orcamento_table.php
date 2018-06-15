<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarrinhoOrcamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carrinho_orcamento', function(Blueprint $table)
		{
			$table->integer('carorc_id', true);
			$table->string('carorc_rowid', 64);
			$table->integer('carorc_emp_id');
			$table->integer('carorc_func_id');
			$table->integer('carorc_num_prod');
			$table->integer('carorc_unidade');
			$table->integer('carorc_qtde_unidade');
			$table->integer('carorc_qtde');
			$table->decimal('carorc_preco', 10);
			$table->date('carorc_pz_entrega');
			$table->date('carorc_dt_pedido');
			$table->string('carorc_descricao', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('carrinho_orcamento');
	}

}
