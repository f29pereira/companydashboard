<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
                'first_name'    =>  'Filipe',
                'last_name'     =>  'Pereira',
                'email'         =>  'admin@gmail.com',
                'phone'         =>  '962670353',
                'profession'    =>  'Administrator',
                'password'      =>  '$2y$10$fEymSCymFra2OtDhfTBLruysJG7XycqdOaB6ClEI9dfdPSdqSqhNK',
                'is_deleted'    =>  false,
                'user_role_id'  =>  1,
                'user_image_id' =>  1,
                'department_id' =>  7,
                'company_id'    =>  2,
                'created_at'    => Carbon::now(),
            ],
            /**
             * Gestor Nao Conformidades
             */
            //password: admin123
            [
                'first_name'    =>  'Agatha',
                'last_name'     =>  'Parkinson',
                'email'         =>  'agatha@gmail.com',
                'phone'         =>  '962670353',
                'profession'    =>  'Colaborador',
                'password'      =>  '$2y$10$fEymSCymFra2OtDhfTBLruysJG7XycqdOaB6ClEI9dfdPSdqSqhNK',
                'is_deleted'    =>  false,
                'user_role_id'  =>  2,
                'user_image_id' =>  1,
                'department_id' =>  4,
                'company_id'    =>  2,
                'created_at'    => Carbon::now(),
            ],
            /**
             * Responsavel Departamento
             */
            //password: admin123
            [
                'first_name'    =>  'Jeanne',
                'last_name'     =>  'Mccallum',
                'email'         =>  'jeanne@gmail.com',
                'phone'         =>  '962670353',
                'profession'    =>  'Colaborador',
                'password'      =>  '$2y$10$fEymSCymFra2OtDhfTBLruysJG7XycqdOaB6ClEI9dfdPSdqSqhNK',
                'is_deleted'    =>  false,
                'user_role_id'  =>  3,
                'user_image_id' =>  1,
                'department_id' =>  1,
                'company_id'    =>  2,
                'created_at'    => Carbon::now(),
            ],
            /**
             * Colaboradores
             */
            //password: admin123
            [
                'first_name'    =>  'Phillip',
                'last_name'     =>  'Dunne',
                'email'         =>  'phillip@gmail.com',
                'phone'         =>  '962670353',
                'profession'    =>  'Colaborador',
                'password'      =>  '$2y$10$fEymSCymFra2OtDhfTBLruysJG7XycqdOaB6ClEI9dfdPSdqSqhNK',
                'is_deleted'    =>  false,
                'user_role_id'  =>  4,
                'user_image_id' =>  1,
                'department_id' =>  1,
                'company_id'    =>  2,
                'created_at'    => Carbon::now(),
            ],
            //password: admin123
            [
                'first_name'    =>  'Nicolas',
                'last_name'     =>  'Gordon',
                'email'         =>  'nicolas@gmail.com',
                'phone'         =>  '962670353',
                'profession'    =>  'Colaborador',
                'password'      =>  '$2y$10$fEymSCymFra2OtDhfTBLruysJG7XycqdOaB6ClEI9dfdPSdqSqhNK',
                'is_deleted'    =>  false,
                'user_role_id'  =>  4,
                'user_image_id' =>  1,
                'department_id' =>  1,
                'company_id'    =>  2,
                'created_at'    => Carbon::now(),
            ]
            //
        ]);
    }
}
