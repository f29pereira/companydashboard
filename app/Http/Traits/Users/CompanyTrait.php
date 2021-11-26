<?php

namespace App\Http\Traits\Users;
use Illuminate\Support\Facades\DB;
use App\Models\Users\Company;

trait CompanyTrait{
  /**
     *  Main company
     *
     * @return App\Models\Users\Company
     */
    public function companyMain(){
        //Company Main
        $company = DB::table('companies')->where('company_types_id', 2)->first();

        return $company;
    }

    /**
     * List of companies
     *
     * @return array[] $list
     */
    public function companyList(){
        //Eager loading: companyTypes
        $list = Company::with(['companyTypes'])->where([
            ['is_deleted', false], //Company not deleted
            ['id', '!=' ,1], //Company Default
            ['company_types_id', '!=' ,2]  //Company Main
        ])->get();

        return $list;
    }

    /**
     *  Count of companies
     *
     * @return int $count
     */
    public function companyCount(){
        $count = DB::table('companies')->where([
            ['is_deleted', false], //Company not deleted
            ['id', '!=' ,1], //Company Default
            ['company_types_id', '!=' ,2]  //Company Main
        ])->count();

        return $count;
    }
}
