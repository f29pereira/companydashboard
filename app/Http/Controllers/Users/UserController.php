<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller\Controller;
use App\Http\Traits\Users\UserTrait;
use App\Http\Traits\Users\UserRoleTrait;
use App\Http\Traits\Users\DepartmentTrait;
use App\Http\Traits\Users\CompanyTrait;
use App\Http\Requests\UserPostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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
     * Update the specified user in storage.
     *
     * @param  App\Http\Requests\UserPostRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserPostRequest $request, $id){
        //Specified User
        $user = User::findOrFail($id);

        //User data update
        $user->update($request->all());

        //User edit message
        $text = $this->msgEdit($user);

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

        if($user->is_deleted == false){
            $user->is_deleted = true;
            $user->save();
        }

        //User delete message
        $text = $this->msgDelete($user);

        //Redirect: Users list
        return redirect()->route('users')->with('message', $text);
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

        return view('user.profile.user-profile', compact('user'));
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

        return view('user.profile.edit-profile', compact('user'));
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

    /**
     * Show the form for updating the user profile picture
     *
     * @return \Illuminate\Http\Response
     */
    public function editProfilePic(){
        //User Authorization
        $this->authorize('is_user');

        //Authenticated User
        $user = Auth::user();

        return view('user.profile.edit-profile-pic', compact('user'));
    }

    /**
     * Update the specified user profile picture in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfilePic(Request $request, $id){
        //User
        $user = User::findOrFail($id);

        //Image validation
        $request->validate([
            'image' =>  ['file', 'mimes:png,jpg,jpeg']
        ]);

        if($request->image != ''){
            //Image Name
            $imageName = time() . '.' . $request->image->extension();

            //Store image on public folder
            $request->image->move(public_path('images/users/registered'), $imageName);

            $user->image = $imageName;

            //User Update
            $user->save();

            //User Image successfully updated
            $text = __('page.users.toastr-user-img');

            return redirect()->route('profile')->with('message', $text);
        }
        /*else{

            //Old image path (acabar o nome da img)
            $oldImg_path = public_path('images/users/registered');

            if(file_exists($oldImg_path)){
                //Delete old image
                unlink($oldImg_path);
            }
        }*/

        //Redirect: User profile
        return redirect()->route('profile');
    }
}
