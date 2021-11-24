<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('users')->insert([
            //password: admin123
            [
                'name'=>'Filipe Pereira',
                'email'=>'admin@gmail.com',
                'phone' => '962670353',
                'password'=>'$2y$10$fEymSCymFra2OtDhfTBLruysJG7XycqdOaB6ClEI9dfdPSdqSqhNK',
                'is_deleted' => false,
                'user_role_id'=> 1,
                'department_id' => 6,
                'company_id' => 2
            ],
            //departamento123
            [
                'name'=>'Jeanne Mccallum',
                'email'=>'jeanne@gmail.com',
                'phone' => '962670353',
                'password'=>'$2y$10$wGdifkPeScoUZACNLPnyYeDASCRPwLlXxc43SHCgIW2wcnlltUi52',
                'is_deleted' => false,
                'user_role_id'=> 2,
                'department_id' => 1,
                'company_id' => 2
            ],
            //colaborador123
            [
                'name'=>'Nome Colaborador',
                'email'=>'colaborador@gmail.com',
                'phone' => '962670353',
                'password'=>'$2y$10$Ss2VeDq3hIGvrTDIJ1h4TesJUAHG11CxyMZ889w9LafljPzwSa4Xi',
                'is_deleted' => false,
                'user_role_id'=> 3,
                'department_id' => 1,
                'company_id' => 2
            ],
            //colaborador123
            [
                'name'=>'Nicolas Gordon',
                'email'=>'colaborador2@gmail.com',
                'phone' => '962670353',
                'password'=>'$2y$10$Ss2VeDq3hIGvrTDIJ1h4TesJUAHG11CxyMZ889w9LafljPzwSa4Xi',
                'is_deleted' => false,
                'user_role_id'=> 4,
                'department_id' => 1,
                'company_id' => 2
            ]
            //
        ]);
    }
}
