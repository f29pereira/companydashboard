<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller\Controller;
use App\Http\Traits\Users\UserTrait;
use App\Http\Traits\Users\UserRoleTrait;
use App\Http\Traits\Users\UserImageTrait;
use App\Http\Traits\Users\DepartmentTrait;
use App\Http\Traits\Users\CompanyTrait;
use App\Http\Requests\UserPostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Users\User;
use App\Models\Users\UserImage;

class UserController extends Controller
{
    use UserTrait;
    use UserRoleTrait;
    use UserImageTrait;
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

        //Specified User - User Name
        $userName = $this->userName($user);

        return view('admin.users.show', compact('user', 'userName'));
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

    /**
     * Display a user profile
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(){
        //User Authorization
        $this->authorize('is_user');

        //Authenticated User
        $user = $this->userAuth();

        //Authenticated User Name
        $userName = $this->userName(Auth::user());

        return view('user.profile.user-profile', compact('user', 'userName'));
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
        $user = $this->userAuth();

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

        //User Update - form data
        $user->update($request->all());

        //User Update - updated_at
        $this->userUpdatedAt($user);

        //Message: user (profile) updated
        $text = $this->userUpdateProfileMsg($user);

        //Redirect: User profile
        return redirect()->route('profile')->with('message', $text);
    }

    /**
     * Show the form for updating the user profile image
     *
     * @return \Illuminate\Http\Response
     */
    public function editProfilePic(){
        //User Authorization
        $this->authorize('is_user');

        //Authenticated User
        $user = $this->userAuth();

        //Return: Edit User Profile picture
        return view('user.profile.edit-profile-pic', compact('user'));
    }

    /**
     * Update the specified user profile image in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfilePic(Request $request, $id){
        //Specified User
        $user = User::findOrFail($id);

        //Old User Image
        $oldUserImage = UserImage::findOrFail($user->user_image_id);

        //Image validation
        $request->validate([
            'image' =>  ['file', 'mimes:png,jpg,jpeg']
        ]);

        if($request->image != ''){
            //New image name
            $imageName = time() . '.' . $request->image->extension();

            //New User Image
            $newUserImage = $this->createImage($imageName);

            //User previously had: default user image
            if($user->user_image_id == 1){
                //Update User
                $user->user_image_id = $newUserImage->id;
                $user->save();

            }else{
                //Update User
                $user->user_image_id = $newUserImage->id;
                $user->save();

                //Delete old User Image (DB)
                $this->deleteImage($oldUserImage->id);

                //Old User Image path (public/storage folder)
                $oldUserImage_path = public_path('/storage/users/'. $oldUserImage->image_name);

                //Delete old User Image (public folder)
                if(file_exists($oldUserImage_path)){
                    unlink($oldUserImage_path);
                }
            }

            //Store new user image (public/storage folder)
            $request->image->move(public_path('/storage/users/'), $imageName);

            //User Update - updated_at
            $this->userUpdatedAt($user);

            //Message: user image updated
            $text = $this->userUpdatePicMsg();

            //Redirect: User profile
            return redirect()->route('profile')->with('message', $text);
        }

        //Redirect: User profile
        return redirect()->route('profile');
    }
}
