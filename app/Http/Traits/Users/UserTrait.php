<?php

namespace App\Http\Traits\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Users\User;


trait UserTrait{
    /**
     * Authenticated user
     *
     * @return App\Models\Users\User    $user
     */
    public function userAuth(){
        //Authenticated User
        $user = Auth::user();

        return $user;
    }

    /**
     * User name and surname
     *
     * @param  App\Models\Users\User    $user
     * @return string                   $name
     */
    public function userName(User $user){
        $name = $user->first_name . ' ' . $user->last_name;

        return $name;
    }

    /**
     * List of users
     *
     * @return array[] $list
     */
    public function userList(){
        //Authenticated User
        $user = Auth::user();

        //Eaguer loading: userRole, department, company
        $list = User::with(['userRole', 'department', 'company'])->where([
            ['is_deleted', false], //User is not deleted
            ['id', '!=', $user->id] //User is not the authenticated user
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

    /**
     * Toastr Message - User successfully updated
     *
     * @param  App\Models\Users\User    $user
     * @return string                   $text
     */
    public function msgEditUser(User $user){
        $text = __('page.users.toastr-title') . " " . $user->first_name . " " .  $user->last_name  . '\n'
        . __('page.generic.toastr-update-success');

        return $text;
    }

    /**
     * Toastr Message - User successfully deleted
     *
     * @param  App\Models\Users\User    $user
     * @return string                   $text
     */
    public function msgDeleteUser(User $user){
        $text = __('page.users.toastr-title') . " " . $user->first_name . " " .  $user->last_name . '\n'
        . __('page.generic.toastr-delete-success');

        return $text;
    }
}
