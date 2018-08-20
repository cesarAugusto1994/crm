<?php

use Illuminate\Database\Seeder;
use App\Models\Chamados\{Status, Fase};

class FasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itens = [
          'SEM INTERESSE',
          'PESQUISANDO PREÇO',
          'PESQUISANDO MAIS OPÇÕES',
          'QUER INDICAÇÃO NOVOS IMOVEIS',
          'ADIOU DECISÃO DE COMPRA',
          'DEPENDE DA VENDA OUTRO IMOVEL',
          'SEM RECURSO FINANCEIROS',
          'ACHOU ACIMA DA CONDIÇÃO FINANCEIRA',
          'PRAZO DE ENTREGA NÃO ATENDE',
          'NÃO GOSTOU DO IMOVEL',
          'JÁ COMPROU',
          'DESISTIU DA COMPRA',
          'NÃO TEM O VALOR DA ENTRADA DISPONIVEL',
          'NÃO TEM RENDA PARA O FINANCIAMENTO',
          'VOLTARA A PROCURAR FUTURAMENTE',
          'OUTRAS SITUAÇOES'
        ];

        foreach ($itens as $key => $item) {

          $fase = Fase::create([
            'nome' => $item,
            'empresa_id' => 8,
          ]);

        }

        $itensStatus = [
          'Em Aberto',
          'Em Andamento',
          'Concluído',
        ];

        foreach ($itensStatus as $key => $item) {

          $status = Status::create([
            'descricao' => $item,
            'id_empresa' => 8,
          ]);

        }


    }
}
