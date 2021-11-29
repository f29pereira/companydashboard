<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller\Controller;
use App\Http\Traits\Users\UserTrait;
use App\Http\Traits\Users\UserRoleTrait;
use App\Http\Traits\Users\DepartmentTrait;
use App\Http\Traits\Users\CompanyTrait;
use App\Http\Requests\UserPostRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Users\User;

class UserController extends Controller
{
    use UserTrait;
    use UserRoleTrait;
    use DepartmentTrait;
    use CompanyTrait;

    /**
     * Display a users menu.
     *
     * @return \Illuminate\Http\Response
     */
    public function usersMenu(){
        //Admin Authorization
        $this->authorize('is_admin');

        //User Count
        $users = $this->userCount();

        //Roles Count
        $roles = $this->roleCount();

        return view('admin.users.users-menu', compact('users', 'roles'));
    }


    /**
     * Display a listing of users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //Admin Authorization
        $this->authorize('is_admin');

        //Users List
        $users = $this->userList();

        //Departments List
        $departments = $this->departmentList();

        return view('admin.users.index', compact('users', 'departments'));
    }

    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //Admin Authorization
        $this->authorize('is_admin');

        //Specified User
        $user = User::findOrFail($id);

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //Admin Authorization
        $this->authorize('is_admin');

        //Specified User
        $user = User::findOrFail($id);

        //Roles
        $roles = $this->roleList();

        //Departments
        $departments = $this->departmentList();

        //Companies
        $companies = $this->companyList();

        return view('admin.users.edit', compact('user', 'roles', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\UserPostRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserPostRequest $request, $id){
        //Specified User
        $user = User::findOrFail($id);

        //User Update
        $user->update($request->all());

        //Redirect: Users List
        return redirect()->route('users');
    }

    /**
     * Soft delete the selected user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function softDelete($id){
        //Specified User
        $user = User::findOrFail($id);

        if($user->is_deleted == false){
            $user->is_deleted = true;
            $user->save();
        }

        //Redirect: users list
        return redirect()->route('users');
    }

    /**
     * Display a user profile
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(){
        //User Authorization
        $this->authorize('is_user');

        //Authenticated User
        $user = Auth::user();

        return view('profile.user-profile', compact('user'));
    }


    /**
     * Show the form for updating the user profile
     *
     * @return \Illuminate\Http\Response
     */
    public function editProfile(){
        //User Authorization
        $this->authorize('is_user');

        //Authenticated User
        $user = Auth::user();

        return view('profile.edit-profile', compact('user'));
    }

    /**
     * Update the specified user profile in storage.
     *
     * @param  App\Http\Requests\UserPostRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(UserPostRequest  $request, $id){
        //User
        $user = User::findOrFail($id);

        //User Update
        $user->update($request->all());

        //Redirect: User profile
        return redirect()->route('profile');
    }
}
