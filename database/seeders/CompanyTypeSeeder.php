<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CompanyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('company_types')->insert([
            //Default Company Type
            [
                'type_name'         => 'A definir',
                'type_description'  => 'A definir',
                'created_at'        => Carbon::now(),
            ],
            [
                'type_name'         => 'Principal',
                'type_description'  => 'Empresa principal dashboard',
                'created_at'        => Carbon::now(),
            ],
            [
                'type_name'         => 'Parceira',
                'type_description'  => 'Empresa que é parceira',
                'created_at'        => Carbon::now(),
            ],
            [
                'type_name'         => 'Cliente',
                'type_description'  => 'Empresa que é cliente',
                'created_at'        => Carbon::now(),
            ],
            [
                'type_name'         => 'Fornecedora',
                'type_description'  => 'Empresa que vai fornecer produto e/ou serviço',
                'created_at'        => Carbon::now(),
            ]
        ]);
    }
}
