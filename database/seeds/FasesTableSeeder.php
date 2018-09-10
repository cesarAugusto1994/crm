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

        $itensStatus = [
          'Em Aberto',
          'Em Andamento',
          'Concluído',
        ];

        foreach ($itensStatus as $key => $item) {
/*
          $status = Status::create([
            'descricao' => $item,
            'id_empresa' => 8,
          ]);
*/
        }

        $itens=[
          [
            'nome'=>'CLIENTE SEM ATENDIMENTO',
            'status_id'=>1,
          ],
          [
            'nome'=>'CLIENTE EM CARTEIRA',
            'status_id'=>1,
          ],
          [
            'nome'=>'ATENDIMENTO INICIAL',
            'status_id'=>2,
          ],

          [
            'nome'=>'EM FASE DE ATENDIMENTO',
            'status_id'=>2,
          ],
          [
            'nome'=>'EM VISITAÇÃO',
            'status_id'=>2,
          ],
          [
            'nome'=>'EM NEGOCIAÇÃO',
            'status_id'=>2,
          ],
          [
            'nome'=>'EM FASE DE PROPOSTA',
            'status_id'=>2,
          ],
          [
            'nome'=>'PESQUISANDO PREÇO',
            'status_id'=>2,
          ],
          [
            'nome'=>'PESQUISANDO MAIS OPÇÕES',
            'status_id'=>2,
          ],
          [
            'nome'=>'QUER INDICAÇÃO NOVOS IMOVEIS',
            'status_id'=>2,
          ],
          [
            'nome'=>'AGUARDANDO ENTRADA RECURSOS',
            'status_id'=>2,
          ],
          [
            'nome'=>'AGUARDANDO ANALISE CREDITO',
            'status_id'=>2,
          ],
          [
            'nome'=>'AGUARDANDO VENDA DE IMOVEL',
            'status_id'=>2,
          ],
          [
            'nome'=>'EM FASE DE PROSPECÇÃO',
            'status_id'=>2,
          ],
          [
            'nome'=>'EM FASE DE OFERTA',
            'status_id'=>2,
          ],
          [
            'nome'=>'EM FASE DE REATIVAÇÃO DO LEAD',
            'status_id'=>2,
          ],
          [
            'nome'=>'CURIOSIDADE / SEM INTERESSE',
            'status_id'=>2,
          ],
          [
            'nome'=>'PESQUISANDO PARA LOCAÇÃO',
            'status_id'=>2,
          ],

          ///////////////////////////////////////
          ///////////////////////////////////////

          [
            'nome'=>'PERDEU O INTERESSE',
            'status_id'=>3,
          ],
          [
            'nome'=>'DESISTIU DA COMPRA',
            'status_id'=>3,
          ],
          [
            'nome'=>'ADIOU A DECISÃO DE COMPRA',
            'status_id'=>3,
          ],
          [
            'nome'=>'JÁ COMPROU OUTRO IMOVEL',
            'status_id'=>3,
          ],
          [
            'nome'=>'DEPENDE DA VENDA OUTRO IMOVEL',
            'status_id'=>3,
          ],
          [
            'nome'=>'SEM RECURSO FINANCEIROS',
            'status_id'=>3,
          ],
          [
            'nome'=>'ACHOU ACIMA DA CONDIÇÃO FINANCEIRA',
            'status_id'=>3,
          ],
          [
            'nome'=>'PRAZO DE ENTREGA NÃO ATENDE',
            'status_id'=>3,
          ],
          [
            'nome'=>'NÃO GOSTOU DO IMOVEL',
            'status_id'=>3,
          ],
          [
            'nome'=>'NÃO GOSTOU DO LOCAL /BAIRRO/REGIÃO',
            'status_id'=>3,
          ],
          [
            'nome'=>'NÃO TEM O VALOR DA ENTRADA DISPONIVEL',
            'status_id'=>3,
          ],
          [
            'nome'=>'NÃO TEM RENDA PARA O FINANCIAMENTO',
            'status_id'=>3,
          ],

          [
            'nome'=>'VOLTARA A PROCURAR FUTURAMENTE',
            'status_id'=>3,
          ],
          [
            'nome'=>'CONTRATO ASSINADO',
            'status_id'=>3,
          ],
          [
            'nome'=>'PROPOSTA DE COMPRA RECUSADA',
            'status_id'=>3,
          ],
          [
            'nome'=>'NÃO PASSOU PELA ANALISE CREDITO',
            'status_id'=>3,
          ],
          [
            'nome'=>'PROBLEMAS CADASTRAIS / SERASA',
            'status_id'=>3,
          ],
          [
            'nome'=>'CANCELAMENTO / DISTRATO',
            'status_id'=>3,
          ],
          [
            'nome'=>'CLIENTE EM CARTEIRA',
            'status_id'=>3,
          ],
          [
            'nome'=>'CURIOSIDADE / SEM INTERESSE',
            'status_id'=>3,
          ],
          [
            'nome'=>'NÃO É CLIENTE',
            'status_id'=>3,
          ],
          [
            'nome'=>'NÃO QUER COMPRAR/ INTESSE EM LOCAÇÃO',
            'status_id'=>3,
          ],
          [
            'nome'=>'OUTRAS SITUAÇOES',
            'status_id'=>3,
          ],

        ];

        foreach ($itens as $key => $item) {

          $fase = Fase::create([
            'nome' => $item['nome'],
            'empresa_id' => 8,
            'status_id' => $item['status_id']
          ]);

        }

    }
}
