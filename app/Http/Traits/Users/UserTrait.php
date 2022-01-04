<?php

namespace App\Http\Traits\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Users\User;
use Carbon\Carbon;

/**
 * Users - Trait
 */
trait UserTrait{
    /**
     * Count of registered users
     *
     * @return int $count
     */
    public function userCount(){
        $count = DB::table('users')->where('is_deleted', false)->count();

        return $count;
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
     * Update the updated_at attribute of the specified user
     *
     * @param  App\Models\Users\User    $user
     */
    public function userUpdatedAt(User $user){
        $user->updated_at = Carbon::now();
        $user->save();
    }

    /**
     * Toastr Message - User successfully updated
     *
     * @param  App\Models\Users\User    $user
     * @return string                   $text
     */
    public function userUpdateMsg(User $user){
        $text = __('users.toastr-title') . " " . $user->first_name . " " .  $user->last_name  . '\n'
        . __('page.generic.toastr-update-success');

        return $text;
    }

    /**
     * Soft Delete the specified user
     *
     * @param  App\Models\Users\User    $user
     */
    public function userDelete(User $user){
        if($user->is_deleted == false){
            $user->is_deleted = true;
            $user->save();
        }
    }

    /**
     * Update the deleted_at attribute of the specified user
     *
     * @param  App\Models\Users\User      $user
     */
    public function userDeletedAt(User $user){
        $user->deleted_at = Carbon::now();
        $user->save();
    }

    /**
     * Toastr Message - User successfully deleted
     *
     * @param  App\Models\Users\User    $user
     * @return string                   $text
     */
    public function userDeleteMsg(User $user){
        $text = __('users.toastr-title') . " " . $user->first_name . " " .  $user->last_name . '\n'
        . __('page.generic.toastr-delete-success');

        return $text;
    }
}
