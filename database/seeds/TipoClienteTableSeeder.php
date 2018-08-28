<?php

use Illuminate\Database\Seeder;

class TipoClienteTableSeeder extends Seeder
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
            'id' => 2,
            'nome' => 'Cliente',
            'exibir' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          1 =>
          array (
            'id' => 3,
            'nome' => 'Fornecedor',
            'exibir' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          2 =>
          array (
            'id' => 4,
            'nome' => 'Colaborador',
            'exibir' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          3 =>
          array (
            'id' => 5,
            'nome' => 'Prospectando',
            'exibir' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
        );

        foreach ($itens as $key => $item) {
            App\Models\Clientes\Tipo::create($item);
        }
    }
}
