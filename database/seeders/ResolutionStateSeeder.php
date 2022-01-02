<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResolutionStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('resolution_states')->insert([
            [   'state_name' => 'Not solved'        ],
            [   'state_name' => 'To be resolved'    ],
            [   'state_name' => 'Sorted out'        ],
        ]);
    }
}
