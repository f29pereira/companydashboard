<?php

namespace App\Http\Traits\Nonconformities;
use Illuminate\Support\Facades\DB;
use App\Models\Nonconformities\Nonconformity;
use Carbon\Carbon;

/**
 * Nonconformity - Trait
 */
trait NonconformityTrait{
    /**
     * Count of occurrences
     *
     * @return int $count
     */
    public function ncsCount(){
        $count = DB::table('nonconformities')->count();

        return $count;
    }

    /**
     * List of nonconformities
     *
     * @return array[] $list
     */
    public function ncsList(){

    }

    /**
     * List of nonconformities - state: not solved
     *
     * @return array[] $list
     */
    public function ncsNotSolvedList(){

    }

    /**
     * List of nonconformities - state: getting solved
     *
     * @return array[] $list
     */
    public function ncsGettingSolvedList(){

    }

    /**
     * List of nonconformities - state: solved
     *
     * @return array[] $list
     */
    public function ncsSolvedList(){

    }

    /**
     * Update the created_at attribute of the specified nonconformity
     *
     * @param App\Models\Nonconformities\Nonconformity  $nonconformity
     */
    public function ncCreatedAt(Nonconformity $nc){
        $nc->created_at = Carbon::now();
        $nc->save();
    }

    /**
     * Toastr Message - Nonconformity successfully created
     *
     * @return string   $text
     */
    public function ncCreateMsg(){
        $text = __('nonconformities.toastr-create-sucess');

        return $text;
    }

    /**
     * Update the updated_at attribute of the specified nonconformity
     *
     * @param App\Models\Nonconformities\Nonconformity  $nonconformity
     */
    public function ncUpdatedAt(Nonconformity $nc){
        $nc->updated_at = Carbon::now();
        $nc->save();
    }

    /**
     * Toastr Message - Nonconformity successfully updated
     *
     * @return string   $text
     */
    public function ncUpdateMsg(){
        $text = __('nonconformities.toastr-update-sucess');

        return $text;
    }

    /**
     * Soft Delete the specified nonconformity
     *
     * @param App\Models\Nonconformities\Nonconformity  $nonconformity
     */
    public function ncDelete(Nonconformity $nc){
        if ($nc->is_deleted == false) {
            $nc->is_deleted = true;
            $nc->save();
        }
    }

    /**
     * Update the deleted_at attribute of the specified nonconformity
     *
     * @param App\Models\Nonconformities\Nonconformity  $nonconformity
     */
    public function ncDeletedAt(Nonconformity $nc){
        $nc->deleted_at = Carbon::now();
        $nc->save();
    }

    /**
     * Toastr Message - Nonconformity successfully deleted
     *
     * @return string   $text
     */
    public function ncDeleteMsg(){
        $text = __('nonconformities.toastr-delete-sucess');

        return $text;
    }
}
