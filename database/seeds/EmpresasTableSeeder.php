<?php

use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
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
            'nome' => 'Brasitelhas',
            'status' => 1,
            'num_usuarios' => 7,
            'created_at' => NULL,
            'updated_at' => '2018-06-16 04:42:21',
            'mail_driver' => 'smtp',
            'mail_host' => 'asd',
            'mail_port' => NULL,
            'mail_username' => NULL,
            'mail_password' => NULL,
            'mail_encription' => NULL,
          ),
          1 =>
          array (
            'id' => 2,
            'nome' => 'Netma',
            'status' => 1,
            'num_usuarios' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'mail_driver' => NULL,
            'mail_host' => NULL,
            'mail_port' => NULL,
            'mail_username' => NULL,
            'mail_password' => NULL,
            'mail_encription' => NULL,
          ),
          2 =>
          array (
            'id' => 7,
            'nome' => 'Teste',
            'status' => 1,
            'num_usuarios' => 6,
            'created_at' => NULL,
            'updated_at' => '2018-06-16 04:40:47',
            'mail_driver' => 'k.hui.iiii',
            'mail_host' => NULL,
            'mail_port' => NULL,
            'mail_username' => NULL,
            'mail_password' => NULL,
            'mail_encription' => NULL,
          ),
          3 =>
          array (
            'id' => 8,
            'nome' => 'Seabra',
            'status' => 1,
            'num_usuarios' => 5,
            'created_at' => NULL,
            'updated_at' => '2018-06-28 18:35:14',
            'mail_driver' => 'smtp',
            'mail_host' => 'smtp.gmail.com',
            'mail_port' => '587',
            'mail_username' => 'cezzaar@gmail.com',
            'mail_password' => 'Cesar1507',
            'mail_encription' => 'tls',
          ),
          4 =>
          array (
            'id' => 9,
            'nome' => 'Eco 101',
            'status' => 1,
            'num_usuarios' => 253,
            'created_at' => '2018-06-16 17:49:12',
            'updated_at' => '2018-06-16 17:49:12',
            'mail_driver' => NULL,
            'mail_host' => NULL,
            'mail_port' => NULL,
            'mail_username' => NULL,
            'mail_password' => NULL,
            'mail_encription' => NULL,
          ),
          5 =>
          array (
            'id' => 10,
            'nome' => 'OsCorp',
            'status' => 1,
            'num_usuarios' => 2,
            'created_at' => '2018-06-18 21:52:51',
            'updated_at' => '2018-06-18 21:52:51',
            'mail_driver' => NULL,
            'mail_host' => NULL,
            'mail_port' => NULL,
            'mail_username' => NULL,
            'mail_password' => NULL,
            'mail_encription' => NULL,
          ),
        );

        foreach ($itens as $key => $item) {
            App\Models\Empresa::create($item);
        }
    }
}
