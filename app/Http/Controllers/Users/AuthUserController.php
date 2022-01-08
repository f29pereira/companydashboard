<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller\Controller;
use App\Http\Traits\Users\AuthUserTrait;
use App\Http\Traits\Users\UserTrait;
use App\Http\Traits\Users\UserImageTrait;
use App\Http\Requests\UserPostRequest;
use App\Models\Users\User;
use App\Models\Users\UserImage;
use Illuminate\Http\Request;

/**
 * Authenticated User - Controller
 */
class AuthUserController extends Controller{
    use AuthUserTrait, UserTrait, UserImageTrait;

    /**
     * Display a listing of users from the same department as the Auth user.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //User Authorization
        $this->authorize('is_user_company');

        //Auth User - Department
        $department = $this->authDepartment();

        //Auth User - Default Department
        if ($this->authDepartment()->id == 1) {
            return view('user.user_auth.no-index');
        }

        //List of users
        $users = $this->authUsers();

        return view('user.auth.index', compact('department', 'users'));
    }

    /**
     * Display the occurrences menu
     *
     * @return \Illuminate\Http\Response
     */
    public function occurrenceMenu(){
        //User Authorization
        $this->authorize('is_user_company');

        //Count - occurrences not solved
        $notSolved = $this->authNotSolvedCount();

        //Count - occurrences solving
        $solving = $this->authSolvingCount();

        //Count - occurrences solved
        $solved = $this->authSolvedCount();

        return view('user.auth.occurrences.menu', compact('notSolved', 'solving', 'solved'));
    }

    /**
     * Display a listing of occurrences (not solved) created by Auth User.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexNotSolved(){
        //User Authorization
        $this->authorize('is_user_company');

        //Auth User Occurrences - not solved
        $occurrences = $this->authNotSolvedList();

        //Page Title
        $title = __('oc.auth.index-not-solved-title');

        //Page tooltip
        $tooltip = __('oc.auth.tip-index-not-solved');

        return view('user.auth.occurrences.index', compact('occurrences','title','tooltip'));
    }

    /**
     * Display a listing of occurrences (getting solved) created by Auth User.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexGettingSolved(){
        //User Authorization
        $this->authorize('is_user_company');

        //Auth User Occurrences - getting solved
        $occurrences = $this->authSolvingList();

        //Page Title
        $title = __('oc.auth.index-getting-solved-title');

        //Page tooltip
        $tooltip = __('oc.auth.tip-index-getting-solved');

        return view('user.auth.occurrences.index', compact('occurrences','title','tooltip'));
    }

    /**
     * Display a listing of occurrences (solved) created by Auth User.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSolved(){
        //User Authorization
        $this->authorize('is_user_company');

        //Auth User Occurrences - solved
        $occurrences = $this->authSolvedList();

        //Page Title
        $title = __('oc.auth.index-solved-title');

        //Page tooltip
        $tooltip = __('oc.auth.tip-index-solved');

        return view('user.auth.occurrences.index', compact('occurrences','title','tooltip'));
    }

    /**
     * Display the specified Auth User occurrence.
     */
    public function showOccurrence($id){
        //User Authorization
        $this->authorize('is_user_company');

        //Specified occurrence
        $occurrence = '';

        return view('user.auth.occurrences.show', compact('occurrence'));
    }

    /**
     * Display the authenticated user profile
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(){
        //User Authorization
        $this->authorize('is_user');

        //Authenticated User
        $user = $this->auth();

        //Authenticated User Name
        $userName = $this->authName();

        return view('user.auth.profile.user-profile', compact('user', 'userName'));
    }

    /**
     * Show the form for updating the authenticated user profile
     *
     * @return \Illuminate\Http\Response
     */
    public function editProfile(){
        //User Authorization
        $this->authorize('is_user');

        //Authenticated User
        $user = $this->auth();

        return view('user.auth.profile.edit-profile', compact('user'));
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
        $text = $this->authUpdateMsg();

        //Redirect: User profile
        return redirect()->route('profile')->with('message', $text);
    }

    /**
     * Show the form for updating the authenticated user profile image
     *
     * @return \Illuminate\Http\Response
     */
    public function editProfilePic(){
        //User Authorization
        $this->authorize('is_user');

        //Authenticated User
        $user = $this->auth();

        //Return: Edit User Profile picture
        return view('user.auth.profile.edit-profile-pic', compact('user'));
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
            $text = $this->authUpdatePicMsg();

            //Redirect: User profile
            return redirect()->route('profile')->with('message', $text);
        }

        //Redirect: User profile
        return redirect()->route('profile');
    }
}
