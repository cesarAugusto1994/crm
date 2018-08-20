<?php

use Illuminate\Database\Seeder;
use App\Models\{Classificacao, Previsao};

class ClassificacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itens = [
          ['ATENDIMENTO INICIAL', 1],
          ['EM FASE DE ATENDIMENTO', 30],
          ['EM VISITAÇÃO', 5],
          ['EM NEGOCIAÇÃO' , 5],
          ['PROPOSTA DE COMPRA' , 5],
          ['EM ASSINATURA CONTRATO', 3],
          ['CONTRATO ASSINADO', 1],
          ['CANCELAMENTO / DESITÊNCIA', 3],
          ['EM PROSPECÇÃO / OFERTA' , 30],
          ['CLIENTE EM CARTEIRA' , 30],
          ['ATENDIMENTO FINALIZADO' , 1],
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
