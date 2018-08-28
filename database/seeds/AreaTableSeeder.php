<?php

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itens = array (
          0 =>
          array (
            'id' => 1,
            'descricao' => 'Diretoria',
            'id_empresa' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          1 =>
          array (
            'id' => 2,
            'descricao' => 'Engenharia',
            'id_empresa' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          2 =>
          array (
            'id' => 3,
            'descricao' => 'Financeiro',
            'id_empresa' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          3 =>
          array (
            'id' => 4,
            'descricao' => 'Compras',
            'id_empresa' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          4 =>
          array (
            'id' => 5,
            'descricao' => 'Atendimento',
            'id_empresa' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          5 =>
          array (
            'id' => 6,
            'descricao' => 'Técnico',
            'id_empresa' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          6 =>
          array (
            'id' => 7,
            'descricao' => 'Diretoria',
            'id_empresa' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          7 =>
          array (
            'id' => 8,
            'descricao' => 'Financeiro',
            'id_empresa' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          8 =>
          array (
            'id' => 9,
            'descricao' => 'Tecnicos',
            'id_empresa' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          9 =>
          array (
            'id' => 10,
            'descricao' => 'Diretoria',
            'id_empresa' => 8,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          10 =>
          array (
            'id' => 11,
            'descricao' => 'Financeiro',
            'id_empresa' => 8,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          11 =>
          array (
            'id' => 12,
            'descricao' => 'Atendimento',
            'id_empresa' => 8,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          12 =>
          array (
            'id' => 13,
            'descricao' => 'Corretores',
            'id_empresa' => 8,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
        );

        foreach ($itens as $key => $item) {
            \App\Models\Area::create($item);
        }
    }
}
