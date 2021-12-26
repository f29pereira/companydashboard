<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
                'department_name'   => 'A definir',
                'created_at'        => Carbon::now(),
            ],
            //List of departments
            [
                'department_name'   => 'Administrativo',
                'created_at'        => Carbon::now(),
            ],
            [
                'department_name'   => 'Financeiro',
                'created_at'        => Carbon::now(),
            ],
            [
                'department_name'   => 'Recursos Humanos',
                'created_at'        => Carbon::now(),
            ],
            [
                'department_name'   => 'Qualidade',
                'created_at'        => Carbon::now(),
            ],
            [
                'department_name'   => 'Marketing',
                'created_at'        => Carbon::now(),
            ],
            [
                'department_name'   => 'IT',
                'created_at'        => Carbon::now(),
            ],
        ]);
    }
}
