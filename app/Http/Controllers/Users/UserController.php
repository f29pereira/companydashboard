<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller\Controller;
use App\Http\Traits\Users\UserTrait;
use App\Http\Traits\Users\UserRoleTrait;
use App\Http\Traits\Users\UserImageTrait;
use App\Http\Traits\Users\DepartmentTrait;
use App\Http\Traits\Companies\CompanyTrait;
use App\Http\Requests\Users\UserPostRequest;
use App\Models\Users\User;

/**
 * Users - Controller
 */
class UserController extends Controller{
    use UserTrait, UserRoleTrait, UserImageTrait,
    DepartmentTrait, CompanyTrait;

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

        //Departments Count
        $departments = $this->departmentCount();

        //Roles Count
        $roles = $this->roleCount();

        return view('user.users.menu', compact('users','departments','roles'));
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

        return view('user.users.index', compact('users', 'departments'));
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

        //Specified User - User Name
        $userName = $this->userName($user);

        return view('user.users.show', compact('user', 'userName'));
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

        return view('user.users.edit', compact('user', 'roles', 'departments'));
    }

    /**
     * Update the specified user in storage.
     *
     * @param  App\Http\Requests\Users\UserPostRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserPostRequest $request, $id){
        //Specified User
        $user = User::findOrFail($id);

        //User Update - form data
        $user->update($request->all());

        //User Update - updated_at
        $this->userUpdatedAt($user);

        //Message: user updated
        $text = $this->userUpdateMsg($user);

        //Redirect: Users List
        return redirect()->route('users')->with('message', $text);
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

        //User Delete
        $this->userDelete($user);

        //User Update - deleted_at
        $this->userDeletedAt($user);

        //Message: user deleted
        $text = $this->userDeleteMsg($user);

        //Redirect: Users list
        return redirect()->route('users')->with('message', $text);
    }
}
