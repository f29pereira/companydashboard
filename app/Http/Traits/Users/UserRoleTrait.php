<?php

namespace App\Http\Traits\Users;
use Illuminate\Support\Facades\DB;
use App\Models\Users\UserRole;

/**
 * User Roles - Trait
 */
trait UserRoleTrait{
    /**
     * List of roles
     *
     * @return array[] $list
     */
    public function roleList(){
        $list = UserRole::all();

        return $list;
    }

    /**
     * Count of roles
     *
     * @return int $count
     */
    public function roleCount(){
        $count = DB::table('user_roles')->count();

        return $count;
    }
}
