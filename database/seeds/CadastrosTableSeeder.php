<?php

use Illuminate\Database\Seeder;

class CadastrosTableSeeder extends Seeder
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
    'descricao' => 'Reclamação',
    'id_prod_serv' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 =>
  array (
    'id' => 2,
    'descricao' => 'Solicitação',
    'id_prod_serv' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 =>
  array (
    'id' => 3,
    'descricao' => 'Opinião',
    'id_prod_serv' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
);

      foreach ($itens as $key => $item) {
          \App\Models\Manifestacao::create($item);
      }

      $itens = array (
  0 =>
  array (
    'id' => 1,
    'descricao' => 'Mal Atendimento',
    'id_manifestacao' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 =>
  array (
    'id' => 2,
    'descricao' => 'Valor',
    'id_manifestacao' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 =>
  array (
    'id' => 3,
    'descricao' => 'Instalação',
    'id_manifestacao' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 =>
  array (
    'id' => 4,
    'descricao' => 'Acabamento',
    'id_manifestacao' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  4 =>
  array (
    'id' => 5,
    'descricao' => 'Cobrança',
    'id_manifestacao' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  5 =>
  array (
    'id' => 6,
    'descricao' => 'Visita',
    'id_manifestacao' => 2,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  6 =>
  array (
    'id' => 7,
    'descricao' => 'Orçamento',
    'id_manifestacao' => 2,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  7 =>
  array (
    'id' => 8,
    'descricao' => 'Documento',
    'id_manifestacao' => 2,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  8 =>
  array (
    'id' => 9,
    'descricao' => 'Elogio',
    'id_manifestacao' => 3,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  9 =>
  array (
    'id' => 10,
    'descricao' => 'Crítica',
    'id_manifestacao' => 3,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
);

      foreach ($itens as $key => $item) {
          \App\Models\Manifestacao\Grupo::create($item);
      }

      $itens = array (
  0 =>
  array (
    'id' => 1,
    'descricao' => 'Vendedor',
    'id_grupo' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 =>
  array (
    'id' => 2,
    'descricao' => 'Equipe técnica',
    'id_grupo' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 =>
  array (
    'id' => 3,
    'descricao' => 'Entregador',
    'id_grupo' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 =>
  array (
    'id' => 4,
    'descricao' => 'Acima do mercado',
    'id_grupo' => 2,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  4 =>
  array (
    'id' => 5,
    'descricao' => 'Falha',
    'id_grupo' => 3,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  5 =>
  array (
    'id' => 6,
    'descricao' => 'Irregular',
    'id_grupo' => 4,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  6 =>
  array (
    'id' => 7,
    'descricao' => 'Data',
    'id_grupo' => 5,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  7 =>
  array (
    'id' => 8,
    'descricao' => 'Técnica',
    'id_grupo' => 6,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  8 =>
  array (
    'id' => 9,
    'descricao' => 'Comercial',
    'id_grupo' => 6,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  9 =>
  array (
    'id' => 10,
    'descricao' => 'Telhado',
    'id_grupo' => 7,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  10 =>
  array (
    'id' => 11,
    'descricao' => 'Calha',
    'id_grupo' => 7,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  11 =>
  array (
    'id' => 12,
    'descricao' => 'Projeto',
    'id_grupo' => 7,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  12 =>
  array (
    'id' => 13,
    'descricao' => 'Contrato',
    'id_grupo' => 8,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  13 =>
  array (
    'id' => 14,
    'descricao' => '2ª via',
    'id_grupo' => 8,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  14 =>
  array (
    'id' => 15,
    'descricao' => 'Instalação',
    'id_grupo' => 9,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  15 =>
  array (
    'id' => 16,
    'descricao' => 'Demora',
    'id_grupo' => 10,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
);

      foreach ($itens as $key => $item) {
          \App\Models\Manifestacao\Grupo\Tipo::create($item);
      }

      $itens = array (
  0 =>
  array (
    'id' => 1,
    'tipo' => 'Residencial',
    'exibir' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 =>
  array (
    'id' => 2,
    'tipo' => 'Comercial',
    'exibir' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
);

      foreach ($itens as $key => $item) {
          \App\Models\Clientes\Enderecos\Tipo::create($item);
      }

      $itens = array (
  0 =>
  array (
    'id' => 1,
    'tipo' => 'Residencial',
    'exibir' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 =>
  array (
    'id' => 2,
    'tipo' => 'Comercial',
    'exibir' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 =>
  array (
    'id' => 3,
    'tipo' => 'Celular',
    'exibir' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 =>
  array (
    'id' => 4,
    'tipo' => 'Fax',
    'exibir' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  4 =>
  array (
    'id' => 5,
    'tipo' => 'Outro',
    'exibir' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
);

      foreach ($itens as $key => $item) {
          \App\Models\Clientes\Telefones\Tipo::create($item);
      }

      $itens = array (
  0 =>
  array (
    'id' => 6,
    'descricao' => 'ATENDIMENTO INICIAL',
    'id_empresa' => 8,
    'created_at' => '2018-08-15 13:48:55',
    'updated_at' => '2018-08-15 13:48:55',
  ),
  1 =>
  array (
    'id' => 7,
    'descricao' => 'EM FASE DE ATENDIMENTO',
    'id_empresa' => 8,
    'created_at' => '2018-08-15 13:48:55',
    'updated_at' => '2018-08-15 13:48:55',
  ),
  2 =>
  array (
    'id' => 8,
    'descricao' => 'EM VISITAÇÃO',
    'id_empresa' => 8,
    'created_at' => '2018-08-15 13:48:55',
    'updated_at' => '2018-08-15 13:48:55',
  ),
  3 =>
  array (
    'id' => 9,
    'descricao' => 'EM NEGOCIAÇÃO',
    'id_empresa' => 8,
    'created_at' => '2018-08-15 13:48:56',
    'updated_at' => '2018-08-15 13:48:56',
  ),
  4 =>
  array (
    'id' => 10,
    'descricao' => 'PROPOSTA DE COMPRA',
    'id_empresa' => 8,
    'created_at' => '2018-08-15 13:48:56',
    'updated_at' => '2018-08-15 13:48:56',
  ),
  5 =>
  array (
    'id' => 11,
    'descricao' => 'EM ASSINATURA CONTRATO',
    'id_empresa' => 8,
    'created_at' => '2018-08-15 13:48:56',
    'updated_at' => '2018-08-15 13:48:56',
  ),
  6 =>
  array (
    'id' => 12,
    'descricao' => 'CONTRATO ASSINADO',
    'id_empresa' => 8,
    'created_at' => '2018-08-15 13:48:57',
    'updated_at' => '2018-08-15 13:48:57',
  ),
  7 =>
  array (
    'id' => 13,
    'descricao' => 'CANCELAMENTO / DESITÊNCIA',
    'id_empresa' => 8,
    'created_at' => '2018-08-15 13:48:57',
    'updated_at' => '2018-08-15 13:48:57',
  ),
  8 =>
  array (
    'id' => 14,
    'descricao' => 'EM PROSPECÇÃO / OFERTA',
    'id_empresa' => 8,
    'created_at' => '2018-08-15 13:48:57',
    'updated_at' => '2018-08-15 13:48:57',
  ),
  9 =>
  array (
    'id' => 15,
    'descricao' => 'CLIENTE EM CARTEIRA',
    'id_empresa' => 8,
    'created_at' => '2018-08-15 13:48:57',
    'updated_at' => '2018-08-15 13:48:57',
  ),
  10 =>
  array (
    'id' => 16,
    'descricao' => 'ATENDIMENTO FINALIZADO',
    'id_empresa' => 8,
    'created_at' => '2018-08-15 13:48:58',
    'updated_at' => '2018-08-15 13:48:58',
  ),
);

      foreach ($itens as $key => $item) {
          \App\Models\Classificacao::create($item);
      }

      $itens = array (
  0 =>
  array (
    'id' => 12,
    'descricao' => '1',
    'id_classificacao' => 6,
    'created_at' => '2018-08-15 13:48:55',
    'updated_at' => '2018-08-15 13:48:55',
  ),
  1 =>
  array (
    'id' => 13,
    'descricao' => '30',
    'id_classificacao' => 7,
    'created_at' => '2018-08-15 13:48:55',
    'updated_at' => '2018-08-15 13:48:55',
  ),
  2 =>
  array (
    'id' => 14,
    'descricao' => '5',
    'id_classificacao' => 8,
    'created_at' => '2018-08-15 13:48:56',
    'updated_at' => '2018-08-15 13:48:56',
  ),
  3 =>
  array (
    'id' => 15,
    'descricao' => '5',
    'id_classificacao' => 9,
    'created_at' => '2018-08-15 13:48:56',
    'updated_at' => '2018-08-15 13:48:56',
  ),
  4 =>
  array (
    'id' => 16,
    'descricao' => '5',
    'id_classificacao' => 10,
    'created_at' => '2018-08-15 13:48:56',
    'updated_at' => '2018-08-15 13:48:56',
  ),
  5 =>
  array (
    'id' => 17,
    'descricao' => '3',
    'id_classificacao' => 11,
    'created_at' => '2018-08-15 13:48:56',
    'updated_at' => '2018-08-15 13:48:56',
  ),
  6 =>
  array (
    'id' => 18,
    'descricao' => '1',
    'id_classificacao' => 12,
    'created_at' => '2018-08-15 13:48:57',
    'updated_at' => '2018-08-15 13:48:57',
  ),
  7 =>
  array (
    'id' => 19,
    'descricao' => '3',
    'id_classificacao' => 13,
    'created_at' => '2018-08-15 13:48:57',
    'updated_at' => '2018-08-15 13:48:57',
  ),
  8 =>
  array (
    'id' => 20,
    'descricao' => '30',
    'id_classificacao' => 14,
    'created_at' => '2018-08-15 13:48:57',
    'updated_at' => '2018-08-15 13:48:57',
  ),
  9 =>
  array (
    'id' => 21,
    'descricao' => '30',
    'id_classificacao' => 15,
    'created_at' => '2018-08-15 13:48:58',
    'updated_at' => '2018-08-15 13:48:58',
  ),
  10 =>
  array (
    'id' => 22,
    'descricao' => '1',
    'id_classificacao' => 16,
    'created_at' => '2018-08-15 13:48:58',
    'updated_at' => '2018-08-15 13:48:58',
  ),
);

        foreach ($itens as $key => $item) {
            \App\Models\Previsao::create($item);
        }

    }
}
