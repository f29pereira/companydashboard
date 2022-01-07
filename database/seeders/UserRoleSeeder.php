<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('user_roles')->insert([
            [
                'role_name' => 'Administrador',
                'role_description' => 'Utilizador com permissão para gerir utilizadores registados'
            ],
            [
                'role_name' => 'R.Departamento',
                'role_description' => 'Utilizador com permissão para consultar os colaboradores do seu departamento'
            ],
            [
                'role_name' => 'Colaborador',
                'role_description' => 'Utilizador com permissão para consultar o seu perfil'
            ]
        ]);
    }
}
