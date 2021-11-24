<?php

namespace App\Http\Traits\Users;
use Illuminate\Support\Facades\DB;
use App\Models\Users\User;

trait UserTrait{
    /**
     * List of users (not admin)
     *
     * @return array[] $list
     */
    public function userList(){
        //Eaguer loading: userRole, department, company
        $list = User::with(['userRole', 'department', 'company'])->where([
            ['user_role_id', '!=', 1], //User is not Admin
            ['is_deleted', false] //User is not deleted
        ])->get();

        return $list;
    }

    /**
     * List of users with department
     *
     * @return array[] $list
     */
    public function userDepartmentList(){
        //Eager loading: department
        $list = User::with(['department'])->where([
            ['is_deleted', false] //User is not deleted
        ])->get();

        return $list;
    }

    /**
     * Count of registered users
     *
     *  @return int $count
     */
    public function userCount(){
        $count = DB::table('users')->where('is_deleted', false)->count();

        return $count;
    }
}
