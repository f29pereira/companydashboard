<?php

namespace App\Http\Traits\Users;
use Illuminate\Support\Facades\DB;
use App\Models\Users\Department;
use Carbon\Carbon;

/**
 * Departments - Trait
 */
trait DepartmentTrait{
    /**
     * List of departments
     *
     * @return array[] $list
     */
    public function departmentList(){
        $list = DB::table('departments')->where([
            ['id', '!=', 1], //Department Default
            ['is_deleted', false] //Department not deleted
        ])->get();

        return $list;
    }

    /**
     *  Count of departments
     *
     * @return int $count
     */
    public function departmentCount(){
        $count = DB::table('departments')->where([
            ['id', '!=', 1], //Department Default
            ['is_deleted', false] //Department not deleted
        ])->count();

        return $count;
    }

    /**
     * Update the created_at attribute of the specified department
     *
     * @param  App\Models\Users\Department      $department
     */
    public function departmentCreatedAt(Department $department){
        $department->created_at = Carbon::now();
        $department->save();
    }

    /**
     * Toastr Message - Department successfully created
     *
     * @param  App\Models\Users\Department      $department
     * @return string                           $text
     */
    public function departmentCreateMsg(Department $department){
        $text = __('page.departments.toastr-title')
                . " " . $department->department_name . '\n'
                . __('page.generic.toastr-create-success');

        return $text;
    }

    /**
     * Update the updated_at attribute of the specified department
     *
     * @param  App\Models\Users\Department      $department
     */
    public function departmentUpdatedAt(Department $department){
        $department->updated_at = Carbon::now();
        $department->save();
    }

    /**
     * Toastr Message - Department successfully updated
     *
     * @param  App\Models\Users\Department      $department
     * @return string                           $text
     */
    public function departmentUpdateMsg(Department $department){
        $text = __('page.departments.toastr-title')
                . " " . $department->department_name . '\n'
                . __('page.generic.toastr-update-success');

        return $text;
    }

    /**
     * Delete the specified department
     *
     * @param  App\Models\Users\Department      $department
     */
    public function departmentDelete(Department $department){
        if($department->is_deleted == false){
            $department->is_deleted = true;
            $department->save();
        }
    }

    /**
     * Update the deleted_at attribute of the specified department
     *
     * @param  App\Models\Users\Department      $department
     */
    public function departmentDeletedAt(Department $department){
        $department->deleted_at = Carbon::now();
        $department->save();
    }

    /**
     * Toastr Message - Department successfully deleted
     *
     * @param  App\Models\Users\Department      $department
     * @return string                           $text
     */
    public function departmentDeleteMsg(Department $department){
        $text = __('page.departments.toastr-title')
                . " " . $department->department_name . '\n'
                . __('page.generic.toastr-delete-success');

        return $text;
    }
}
