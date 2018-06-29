<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_emails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chamado_id');
            $table->integer('cliente_id');
            $table->integer('user_id');
            $table->string('arquivo')->nullable();
            $table->longText('mensagem');
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
        Schema::dropIfExists('log_emails');
    }
}
