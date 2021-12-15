<?php

namespace App\Http\Traits\Users;
use Illuminate\Support\Facades\DB;
use App\Models\Users\UserImage;

trait UserImageTrait{
    /**
     * Create user image
     *
     * @param string $name
     * @return App\Models\Users\UserImage $image
     */
    public function createImage($name){
        $image = new UserImage();

        $image->image_name = $name;

        //Save User Image to DB
        $image->save();

        //Return: created User Image
        return $image;
    }

    /**
     * Delete user image
     *
     * @param int $id
     */
    public function deleteImage($id){
        //Specified User Image
        $image = UserImage::findOrFail($id);

        //Delete User Image
        $image->delete();
    }
}
