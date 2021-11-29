<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('companies')->insert([
            //Default company
            [
                'company_name' => 'A definir',
                'company_description' => 'A definir',
                'sector' => 'A definir',
                'company_phone' => 'A definir',
                'headquarters' => 'A definir',
                'website' => 'A definir',
                'company_types_id' => 1
            ],
            //Main company (dashboard)
            [
                'company_name' => 'Company',
                'company_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam condimentum hendrerit tortor eget ultricies. Duis accumsan nisl in cursus egestas. Phasellus non laoreet magna. Cras semper fringilla quam sed vulputate. Nullam purus leo, condimentum mattis neque ac, imperdiet semper nisi. Phasellus sed ullamcorper libero. Phasellus tincidunt magna id facilisis tincidunt. Phasellus vel viverra lorem.',
                'sector' => 'Tecnologia',
                'company_phone' => '962670353',
                'headquarters' => 'Lisboa',
                'website' => 'https://www.google.com/',
                'company_types_id' => 2
            ],
            //Client Company
            [
                'company_name' => 'Client Company',
                'company_description' => 'Lorem ipsum',
                'sector' => 'Tecnologia',
                'company_phone' => '962670358',
                'headquarters' => 'Lisboa',
                'website' => 'https://www.google.com/',
                'company_types_id' => 4
            ]
        ]);
    }
}
