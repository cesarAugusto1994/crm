<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(AreasComunsTableSeeder::class);
        $this->call(BairrosTableSeeder::class);
        $this->call(CidadesTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(FasesTableSeeder::class);
        $this->call(PaisesTableSeeder::class);

        $this->call(PermissionsTableSeeder::class);
        $this->call(ConnectRelationshipsSeeder::class);

        $this->call(EmpresasTableSeeder::class);
        $this->call(AreaTableSeeder::class);

        $this->call(TipoClienteTableSeeder::class);
        $this->call(FormaTratamentoTableSeeder::class);
        //$this->call(ClientesTableSeeder::class);
        //$this->call(EmailTableSeeder::class);


        //$this->call(UsersTableSeeder::class);

        //$this->call(MidiasTableSeeder::class);
        //$this->call(ProdutosTableSeeder::class);

        $this->call(CadastrosTableSeeder::class);
        //$this->call(TelefoneTableSeeder::class);

        //$this->call(ChamadosTableSeeder::class);
        //$this->call(ClienteProdutosMidiasTableSeeder::class);

    }
}
