<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('departments')->insert([
            //Default Department
            [
                'department_name' => 'A definir'
            ],
            [
                'department_name' => 'Administrativo'
            ],
            [
                'department_name' => 'Financeiro'
            ],
            [
                'department_name' => 'Recursos Humanos'
            ],
            [
                'department_name' => 'Qualidade'
            ],
            [
                'department_name' => 'Marketing'
            ],
            [
                'department_name' => 'IT'
            ],
        ]);
    }
}
