<?php

namespace App\Http\Traits\Companies;
use Illuminate\Support\Facades\DB;
use App\Models\Companies\Company;
use Carbon\Carbon;

/**
 * Companies - Trait
 */
trait CompanyTrait{
    /**
     *  Main company
     *
     * @return App\Models\Companies\Company
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
     * Count of companies
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

    /**
     * Update the created_at attribute of the specified company
     *
     *  @param App\Models\Companies\Company      $company
     */
    public function companyCreatedAt(Company $company){
        $company->created_at = Carbon::now();
        $company->save();
    }

    /**
     * Toastr Message - Company successfully created
     *
     * @param App\Models\Companies\Company      $company
     * @return string                       $text
     */
    public function companyCreateMsg(Company $company){
        $text = __('page.companies.toastr-title') . " "
        . $company->company_name . '\n'
        . __('page.generic.toastr-create-success');

        return $text;
    }

    /**
     * Update the updated_at attribute of the specified company
     *
     *  @param App\Models\Companies\Company      $company
     */
    public function companyUpdatedAt(Company $company){
        $company->updated_at = Carbon::now();
        $company->save();
    }

    /**
     * Toastr Message - Company successfully updated
     *
     * @param App\Models\Companies\Company      $company
     * @return string                       $text
     */
    public function companyUpdateMsg(Company $company){
        $text = __('page.companies.toastr-title') . " "
        . $company->company_name . '\n'
        . __('page.generic.toastr-update-success');

        return $text;
    }

    /**
     * Delete the specified company
     *
     * @param App\Models\Companies\Company      $company
     */
    public function companyDelete(Company $company){
        if($company->is_deleted == false){
            $company->is_deleted = true;
            $company->save();
        }
    }

    /**
     * Update the deleted_at attribute of the specified company
     *
     * @param  App\Models\Companies\Company      $company
     */
    public function companyDeletedAt(Company $company){
        $company->deleted_at = Carbon::now();
        $company->save();
    }

    /**
     * Toastr Message - Company successfully deleted
     *
     * @param  App\Models\Companies\Company         $company
     * @return string                           $text
     */
    public function companyDeleteMsg(Company $company){
        $text = __('page.companies.toastr-title') . " "
        . $company->company_name . '\n'
        . __('page.generic.toastr-delete-success');

        return $text;
    }
}
