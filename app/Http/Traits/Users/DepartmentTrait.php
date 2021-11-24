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
            ['is_deleted', '!=', true] //Department soft deleted
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
            ['id', '!=', 1], //Department 'A definir'
            ['is_deleted', '!=', true] //Department soft deleted
        ])->count();

        return $count;
    }
}
