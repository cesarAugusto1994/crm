<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEmailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('emails', function(Blueprint $table)
		{
			$table->foreign('cliente_id', 'emails_ibfk_1')->references('id')->on('clientes')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('emails', function(Blueprint $table)
		{
			$table->dropForeign('emails_ibfk_1');
		});
	}

}
