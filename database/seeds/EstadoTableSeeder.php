<?php

use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itens = [
          [1,33,'Acre','AC'],
          [2,33,'Alagoas','AL'],
          [3,33,'Amazonas','AM'],
          [4,33,'Amapá','AP'],
          [5,33,'Bahia','BA'],
          [6,33,'Ceará','CE'],
          [7,33,'Distrito Federal','DF'],
          [8,33,'Espírito Santo','ES'],
          [9,33,'Goiás','GO'],
          [10,33,'Maranhão','MA'],
          [11,33,'Minas Gerais','MG'],
          [12,33,'Mato Grosso do Sul','MS'],
          [13,33,'Mato Grosso','MT'],
          [14,33,'Pará','PA'],
          [15,33,'Paraíba','PB'],
          [16,33,'Pernambuco','PE'],
          [17,33,'Piauí','PI'],
          [18,33,'Paraná','PR'],
          [19,33,'Rio de Janeiro','RJ'],
          [20,33,'Rio Grande do Norte','RN'],
          [21,33,'Rondônia','RO'],
          [22,33,'Roraima','RR'],
          [23,33,'Rio Grande do Sul','RS'],
          [24,33,'Santa Catarina','SC'],
          [25,33,'Sergipe','SE'],
          [26,33,'São Paulo','SP'],
          [27,33,'Tocantins','TO'],
        ];

        foreach ($itens as $key => $item) {
            \DB::table('estados')->insert([
                'id' => $item[0],
                'pais_id' => $item[1],
                'nome' => $item[2],
                'uf' => $item[3],
                'created_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
