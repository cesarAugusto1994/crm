<?php

use Illuminate\Database\Seeder;

class FormaTratamentoTableSeeder extends Seeder
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
            'forma' => 'Sr.',
            'exibir' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          1 =>
          array (
            'id' => 2,
            'forma' => 'Srta.',
            'exibir' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          2 =>
          array (
            'id' => 3,
            'forma' => 'Dra.',
            'exibir' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          3 =>
          array (
            'id' => 4,
            'forma' => 'Dr.',
            'exibir' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          4 =>
          array (
            'id' => 5,
            'forma' => 'Sra.',
            'exibir' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
          5 =>
          array (
            'id' => 6,
            'forma' => 'Empresa',
            'exibir' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
          ),
        );

        foreach ($itens as $key => $item) {
            App\Models\Clientes\Tratamento::create($item);
        }
    }
}
