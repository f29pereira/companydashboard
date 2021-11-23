<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('company_types')->insert([
            [
                'type_name' => 'A definir',
                'type_description' => 'A definir'
            ],
            [
                'type_name' => 'Principal',
                'type_description' => 'Empresa principal dashboard'
            ],
            [
                'type_name' => 'Parceira',
                'type_description' => 'Empresa que é parceira'
            ],
            [
                'type_name' => 'Cliente',
                'type_description' => 'Empresa que é cliente'
            ],
            [
                'type_name' => 'Fornecedora',
                'type_description' => 'Empresa que vai fornecer produto e/ou serviço'
            ]
        ]);
    }
}
