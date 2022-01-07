<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OccurrenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('occurrences')->insert([
            [
                'oc_title'                  => 'Lorem ipsum',
                'oc_description'            => '<p><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada, arcu faucibus gravida tempus, nisi elit vestibulum arcu, a euismod urna odio eu est.</span></p><p><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">. Duis erat lorem, porta a nulla id, dictum faucibus dolor. Pellentesque maximus justo nec ligula scelerisque ultricies. Etiam eu mollis lacus, nec porta felis. Donec molestie tortor dui, vitae gravida est semper gravida. Quisque tincidunt vitae tellus at maximus. Suspendisse eget ullamcorper enim, id congue tortor.</span><br></p>',
                'is_deleted'                => 0,
                'user_id'                   => 4,
                'resolution_state_id'       => 1,
                'company_id'                => 2,
                'created_at'                => Carbon::now(),
            ],
            [
                'oc_title'                  => 'Lorem ipsum',
                'oc_description'            => '<p><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada, arcu faucibus gravida tempus, nisi elit vestibulum arcu, a euismod urna odio eu est.</span></p><p><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">. Duis erat lorem, porta a nulla id, dictum faucibus dolor. Pellentesque maximus justo nec ligula scelerisque ultricies. Etiam eu mollis lacus, nec porta felis. Donec molestie tortor dui, vitae gravida est semper gravida. Quisque tincidunt vitae tellus at maximus. Suspendisse eget ullamcorper enim, id congue tortor.</span><br></p>',
                'is_deleted'                => 0,
                'user_id'                   => 4,
                'resolution_state_id'       => 2,
                'company_id'                => 2,
                'created_at'                => Carbon::now(),
            ],
            [
                'oc_title'                  => 'Lorem ipsum',
                'oc_description'            => '<p><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada, arcu faucibus gravida tempus, nisi elit vestibulum arcu, a euismod urna odio eu est.</span></p><p><span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">. Duis erat lorem, porta a nulla id, dictum faucibus dolor. Pellentesque maximus justo nec ligula scelerisque ultricies. Etiam eu mollis lacus, nec porta felis. Donec molestie tortor dui, vitae gravida est semper gravida. Quisque tincidunt vitae tellus at maximus. Suspendisse eget ullamcorper enim, id congue tortor.</span><br></p>',
                'is_deleted'                => 0,
                'user_id'                   => 4,
                'resolution_state_id'       => 3,
                'company_id'                => 2,
                'created_at'                => Carbon::now(),
            ]

        ]);
    }
}
