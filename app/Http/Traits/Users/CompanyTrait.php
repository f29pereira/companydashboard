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
            ['id', '!=' ,1], //Company Default
            ['company_types_id', '!=' ,2]  //Company 'Principal'
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
            ['id', '!=' ,1], //Company 'Indefinida'
            ['company_types_id', '!=' ,2]  //Company 'Principal'
        ])->count();

        return $count;
    }
}
