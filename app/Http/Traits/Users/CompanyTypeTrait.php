<?php

namespace App\Http\Traits\Users;
use Illuminate\Support\Facades\DB;
use App\Models\Users\CompanyType;

trait CompanyTypeTrait{
    /**
     * List of company types
     *
     * @return array[] $list
     */
    public function companyTypeList(){
        $list = DB::table('company_types')->where([
            ['id', '!=', 1], //Company Type Default
            ['id', '!=', 2], //Company Type Main Company
            ['is_deleted', '!=', true] //Company Type deleted
        ])->get();

        return $list;
    }

    /**
      * Count of company types
      *
      * @return int $count
      */
    public function companyTypeCount(){
        //Company Type
        $count = DB::table('company_types')->where([
            ['id', '!=', 1], //Company Type Default
            ['id', '!=', 2], //Company Type Main Company
            ['is_deleted', '!=', true] //Company Type deleted
        ])->count();

        return $count;
    }
}