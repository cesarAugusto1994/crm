<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnderecosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enderecos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('cliente_id')->index('cliente');
			$table->integer('tipo')->index('tipo');
			$table->string('cep', 10);
			$table->string('endereco', 100);
			$table->string('numero', 10);
			$table->string('complemento', 45);
			$table->string('bairro', 45);
			$table->string('cidade', 45);
			$table->string('estado', 45);
			$table->string('pais', 100);
			$table->string('caixa_postal', 45);
			$table->text('referencia', 65535);
			$table->string('principal', 3);
			$table->timestamp('criacao')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('ultima_alteracao')->nullable();
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
		Schema::drop('enderecos');
	}

}
