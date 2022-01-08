<?php

namespace App\Http\Traits\Users;

use App\Models\Nonconformities\Occurrence;
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

    /**
     * Count of occurrences (not solved) created by Auth User.
     *
     * @return int $count
     */
    public function authNotSolvedCount(){
        $count = DB::table('occurrences')
        ->where([
            ['is_deleted', false],          //Occurrence is not deleted
            ['resolution_state_id', 1],     //Occurrence with resolution state 'Not Solved'
            ['user_id', Auth::user()->id]   //Occurrence 'user_id' = Auth user id
        ])->count();

        return $count;
    }

    /**
     * List of occurrences (not solved) created by Auth User.
     *
     * @return array[] $list
     */
    public function authNotSolvedList(){
        //Eaguer loading: Company
        $list = Occurrence::with(['company'])
        ->where([
            ['is_deleted', false],          //Occurrence is not deleted
            ['resolution_state_id', 1],     //Occurrence with resolution state 'Not Solved'
            ['user_id', Auth::user()->id]   //Occurrence 'user_id' = Auth user id
        ])->get();

        return $list;
    }

    /**
     * Count of occurrences (getting solved) created by Auth User.
     *
     * @return int $count
     */
    public function authSolvingCount(){
        $count = DB::table('occurrences')
        ->where([
            ['is_deleted', false],          //Occurrence is not deleted
            ['resolution_state_id', 2],     //Occurrence with resolution state 'Getting Solved'
            ['user_id', Auth::user()->id]   //Occurrence 'user_id' = Auth user id
        ])->count();

        return $count;
    }

    /**
     * List of occurrences (getting solved) created by Auth User.
     *
     * @return array[] $list
     */
    public function authSolvingList(){
        $list = Occurrence::with(['company'])
        ->where([
            ['is_deleted', false],          //Occurrence is not deleted
            ['resolution_state_id', 2],     //Occurrence with resolution state 'Not Solved'
            ['user_id', Auth::user()->id]   //Occurrence 'user_id' = Auth user id
        ])->get();

        return $list;
    }

    /**
     * Count of occurrences (solved) created by Auth User.
     *
     * @return int $count
     */
    public function authSolvedCount(){
        $count = DB::table('occurrences')
        ->where([
            ['is_deleted', false],          //Occurrence is not deleted
            ['resolution_state_id', 3],     //Occurrence with resolution state 'Solved'
            ['user_id', Auth::user()->id]   //Occurrence 'user_id' = Auth user id
        ])->count();

        return $count;
    }

    /**
     * List of occurrences (solved) created by Auth User.
     *
     * @return array[] $list
     */
    public function authSolvedList(){
        $list = Occurrence::with(['company'])
        ->where([
            ['is_deleted', false],          //Occurrence is not deleted
            ['resolution_state_id', 3],     //Occurrence with resolution state 'Not Solved'
            ['user_id', Auth::user()->id]   //Occurrence 'user_id' = Auth user id
        ])->get();

        return $list;
    }
}
