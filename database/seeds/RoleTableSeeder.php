<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_manager = new Role();
        $role_manager->name = "admin";
        $role_manager->description = "Usuário Administrativo";
        $role_manager->save();

        $role_employee = new Role();
        $role_employee->name = "user";
        $role_employee->description = "Usuarios da Empresas";
        $role_employee->save();
    }
}
