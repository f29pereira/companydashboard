<?php

namespace App\Http\Traits\Users;
use Illuminate\Support\Facades\DB;
use App\Models\Users\UserRole;

trait UserRoleTrait{
    /**
     * List of user roles
     *
     * @return array[] $list
     */
    public function roleList(){
        $list = UserRole::all();

        //$list = DB::table('user_roles')->get();

        return $list;
    }

    /**
     * Count of user roles
     *
     * @return int $count
     */
    public function roleCount(){
        $count = DB::table('user_roles')->count();

        return $count;
    }
}
