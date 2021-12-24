<?php

namespace App\Http\Traits\Users;
use Illuminate\Support\Facades\DB;
use App\Models\Users\Department;

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
     * Toastr Message - Department successfully created
     *
     * @param  App\Models\Users\Department      $department
     * @return string                           $text
     */
    public function msgCreateDepartment(Department $department){
        $text = __('page.departments.toastr-title')
                . " " . $department->department_name . '\n'
                . __('page.generic.toastr-create-success');

        return $text;
    }

    /**
     * Toastr Message - Department successfully updated
     *
     * @param  App\Models\Users\Department      $department
     * @return string                           $text
     */
    public function msgEditDepartment(Department $department){
        $text = __('page.departments.toastr-title')
                . " " . $department->department_name . '\n'
                . __('page.generic.toastr-update-success');

        return $text;
    }

    /**
     * Toastr Message - Department successfully deleted
     *
     * @param  App\Models\Users\Department      $department
     * @return string                           $text
     */
    public function msgDeleteDepartment(Department $department){
        $text = __('page.departments.toastr-title')
                . " " . $department->department_name . '\n'
                . __('page.generic.toastr-delete-success');

        return $text;
    }
}
