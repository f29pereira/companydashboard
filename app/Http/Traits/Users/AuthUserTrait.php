<?php

namespace App\Http\Traits\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Users\User;

/**
 * Authenticated User - Trait
 */
trait AuthUserTrait{
    /**
     * Authenticated user
     *
     * @return App\Models\Users\User    $user
     */
    public function auth(){
        //Authenticated User
        $user = Auth::user();

        return $user;
    }

    /**
     * User name and surname
     *
     * @return string $name
     */
    public function authName(){
        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;

        return $name;
    }

    /**
     * Toastr Message - User profile data successfully updated
     *
     * @return string  $text
     */
    public function authUpdateMsg(){
        $text = __('users.toastr-user-profile');

        return $text;
    }

    /**
     * Toastr Message - User profile image successfully updated
     *
     * @return string  $text
     */
    public function authUpdatePicMsg(){
        $text = __('users.toastr-user-img');

        return $text;
    }

    /**
     * Auth User Department
     */
    public function authDepartment(){
        $department = DB::table('departments')
        ->where('id', Auth::user()->department_id)
        ->first();

        return $department;
    }

    /**
     * List of users from the same department as the auth user
     */
    public function authUsers(){
        //Eaguer loading: userImage
        $list = User::with(['userImage'])->where([
            ['user_role_id', '!=', 1], //User is not Administrator
            ['is_deleted', false], //User is not deleted
            ['department_id', Auth::user()->department_id] //User department = Auth User department
        ])->get();

        return $list;
    }
}
