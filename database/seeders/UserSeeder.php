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
            /**
             * Admin
             */
            //password: admin123
            [
                'name'=>'Filipe Pereira',
                'email'=>'admin@gmail.com',
                'phone' => '962670353',
                'password'=>'$2y$10$fEymSCymFra2OtDhfTBLruysJG7XycqdOaB6ClEI9dfdPSdqSqhNK',
                'is_deleted' => false,
                'user_role_id'=> 1,
                'department_id' => 7,
                'company_id' => 2
            ],
            /**
             * Gestor Nao Conformidades
             */
            //password: admin123
            [
                'name'=>'Agatha Parkinson',
                'email'=>'agatha@gmail.com',
                'phone' => '962670353',
                'password'=>'$2y$10$fEymSCymFra2OtDhfTBLruysJG7XycqdOaB6ClEI9dfdPSdqSqhNK',
                'is_deleted' => false,
                'user_role_id'=> 2,
                'department_id' => 4,
                'company_id' => 2
            ],
            /**
             * Responsavel Departamento
             */
            //departamento123
            [
                'name'=>'Jeanne Mccallum',
                'email'=>'jeanne@gmail.com',
                'phone' => '962670353',
                'password'=>'$2y$10$fEymSCymFra2OtDhfTBLruysJG7XycqdOaB6ClEI9dfdPSdqSqhNK',
                'is_deleted' => false,
                'user_role_id'=> 3,
                'department_id' => 1,
                'company_id' => 2
            ],
            /**
             * Colaboradores
             */
            //colaborador123
            [
                'name'=>'Phillip Dunne',
                'email'=>'phillip@gmail.com',
                'phone' => '962670353',
                'password'=>'$2y$10$fEymSCymFra2OtDhfTBLruysJG7XycqdOaB6ClEI9dfdPSdqSqhNK',
                'is_deleted' => false,
                'user_role_id'=> 4,
                'department_id' => 1,
                'company_id' => 2
            ],
            //colaborador2123
            [
                'name'=>'Nicolas Gordon',
                'email'=>'nicolas@gmail.com',
                'phone' => '962670353',
                'password'=>'$2y$10$fEymSCymFra2OtDhfTBLruysJG7XycqdOaB6ClEI9dfdPSdqSqhNK',
                'is_deleted' => false,
                'user_role_id'=> 4,
                'department_id' => 1,
                'company_id' => 2
            ]
            //
        ]);
    }
}
