<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsOnChamadoDescricaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chamado_descricao', function (Blueprint $table) {
            $table->enum('origem', ['usuario', 'cliente'])->default('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chamado_descricao', function (Blueprint $table) {
            $table->dropColumn('origem');
        });
    }
}
