<?php

use Illuminate\Database\Seeder;
use App\Models\{Classificacao, Previsao};

class ClassificacaoTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itens = [
          ['Sem Atendimento', 1],
          ['Até 250 MIL', 30],
          ['DE 250 A 500 MIL', 30],
          ['DE 501 A 750 MIL' , 30],
          ['DE 751 A 1 MM' , 30],
          ['DE 1 A 1.5 MM', 30],
          ['DE 1.5 A 2 MM', 30],
          ['DE 2 A 2.5 MM', 30],
          ['DE 2.5 A 3 MM' , 30],
          ['ACIMA DE 3 MM' , 30],
        ];

        foreach ($itens as $key => $item) {

          $classificacao = Classificacao::create([
            'descricao' => $item[0],
            'id_empresa' => 8,
          ]);

          $previsao = Previsao::create([
            'descricao' => $item[1],
            'id_classificacao' => $classificacao->id,
          ]);

        }
    }
}
