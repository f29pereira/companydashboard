<?php

namespace App\Http\Traits\Companies;
use Illuminate\Support\Facades\DB;
use App\Models\Companies\CompanyType;
use Carbon\Carbon;

/**
 * Company Types - Trait
 */
trait CompanyTypeTrait{
    /**
     * List of company types
     *
     * @return array[] $list
     */
    public function typeList(){
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
    public function typeCount(){
        //Company Type
        $count = DB::table('company_types')->where([
            ['id', '!=', 1], //Company Type Default
            ['id', '!=', 2], //Company Type Main Company
            ['is_deleted', '!=', true] //Company Type deleted
        ])->count();

        return $count;
    }

    /**
     * Update the created_at attribute of the specified company type
     *
     * @param App\Models\Users\CompanyType      $companyType
     */
    public function typeCreatedAt(CompanyType $companyType){
        $companyType->created_at = Carbon::now();
        $companyType->save();
    }

    /**
     * Toastr Message - Company Type successfully created
     *
     * @param  App\Models\Users\CompanyType     $companyType
     * @return string                           $text
     */
    public function typeCreateMsg(CompanyType $companyType){
        $text = __('page.company-types.toastr-title') . " "
        . $companyType->type_name . '\n'
        . __('page.generic.toastr-create-success');

        return  $text;
    }

    /**
     * Update the updated_at attribute of the specified company type
     *
     * @param App\Models\Users\CompanyType      $companyType
     */
    public function typeUpdatedAt(CompanyType $companyType){
        $companyType->updated_at = Carbon::now();
        $companyType->save();
    }

    /**
     * Toastr Message - Company Type successfully updated
     *
     * @param  App\Models\Users\CompanyType     $companyType
     * @return string                           $text
     */
    public function typeUpdateMsg(CompanyType $companyType){
        $text = __('page.company-types.toastr-title') . " "
        . $companyType->type_name . '\n'
        . __('page.generic.toastr-update-success');

        return $text;
    }

    /**
     * Delete the specified company type
     *
     * @param  App\Models\Users\CompanyType     $companyType
     */
    public function typeDelete(CompanyType $companyType){
        if($companyType->is_deleted == false){
            $companyType->is_deleted = true;
            $companyType->save();
        }
    }

    /**
     * Update the deleted_at attribute of the specified company type
     *
     * @param  App\Models\Users\CompanyType      $companyType
     */
    public function typeDeletedAt(CompanyType $companyType){
        $companyType->deleted_at = Carbon::now();
        $companyType->save();
    }

    /**
     * Toastr Message - Company Type successfully deleted
     *
     * @param  App\Models\Users\CompanyType     $companyType
     * @return string                           $text
     */
    public function typeDeleteMsg(CompanyType $companyType){
        $text = __('page.company-types.toastr-title') . " "
        . $companyType->type_name . '\n'
        . __('page.generic.toastr-delete-success');

        return $text;
    }
}
