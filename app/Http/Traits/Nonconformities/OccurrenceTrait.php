<?php

namespace App\Http\Traits\Nonconformities;
use Illuminate\Support\Facades\DB;
use App\Models\Nonconformities\Occurrence;
use Carbon\Carbon;

/**
 * Occurrences - Trait
 */
trait OccurrenceTrait{
    /**
     * Count of occurrences
     *
     * @return int $count
     */
    public function occurrencesCount(){
        $count = DB::table('occurrences')->count();

        return $count;
    }

    /**
     * List of occurrences
     *
     * @return array[] $list
     */
    public function occurrencesList(){
        //Eaguer loading: ResolutionState, User, Company
        $list = Occurrence::with(['resolutionState', 'user', 'company'])->where([
            ['is_deleted', false], //Occurrence is not deleted
        ])->get();

        return $list;
    }

    /**
     * List of occurrences - state: not solved
     *
     * @return array[] $list
     */
    public function occurNotSolvedList(){
        $list = DB::table('occurrences')
        ->where('resolution_state_id', 1)
        ->get();

        return $list;
    }

    /**
     * Count of occurrences - state: not solved
     *
     * @return int $count
     */
    public function occurNotSolvedCount(){
        $count = DB::table('occurrences')
        ->where('resolution_state_id', 1)
        ->count();

        return $count;
    }

    /**
     * List of occurrences - state: solving
     *
     * @return array[] $list
     */
    public function occurSolvingList(){
        $list = DB::table('occurrences')
        ->where('resolution_state_id', 2)
        ->get();

        return $list;
    }

    /**
     * Count of occurrences - state: solving
     *
     * @return int $count
     */
    public function occurSolvingCount(){
        $count = DB::table('occurrences')
        ->where('resolution_state_id', 2)
        ->count();

        return $count;
    }

    /**
     * List of occurrences - state: solved
     *
     * @return array[] $list
     */
    public function occurSolvedList(){
        $list = DB::table('occurrences')
        ->where('resolution_state_id', 3)
        ->get();

        return $list;
    }

    /**
     * Count of occurrences - state: solved
     *
     * @return int $count
     */
    public function occurSolvedCount(){
        $count = DB::table('occurrences')
        ->where('resolution_state_id', 3)
        ->count();

        return $count;
    }

    /**
     * Update the created_at attribute of the specified occurrence
     *
     * @param App\Models\Nonconformities\Occurrence    $ocurrence
     */
    public function occurCreatedAt(Occurrence $occurrence){
        $occurrence->created_at = Carbon::now();
        $occurrence->save();
    }

    /**
     * Toastr Message - Occurrence successfully created
     *
     * @return string   $text
     */
    public function occurCreateMsg(){
        $text = __('occurrences.toastr-create-sucess');

        return $text;
    }

    /**
     * Update the updated_at attribute of the specified occurrence
     *
     * @param App\Models\Nonconformities\Occurrence    $ocurrence
     */
    public function occurUpdatedAt(Occurrence $occurrence){
        $occurrence->updated_at = Carbon::now();
        $occurrence->save();
    }

    /**
     * Toastr Message - Occurrence successfully updated
     *
     * @return string   $text
     */
    public function occurUpdateMsg(){
        $text = __('occurrences.toastr-update-sucess');

        return $text;
    }

    /**
     * Soft Delete the specified user
     *
     * @param App\Models\Nonconformities\Occurrence    $occurrence
     */
    public function occurDelete(Occurrence $occurrence){
        if ($occurrence->is_deleted == false) {
            $occurrence->is_deleted = true;
            $occurrence->save();
        }
    }

    /**
     * Update the deleted_at attribute of the specified occurrence
     *
     * @param App\Models\Nonconformities\Occurrence    $ocurrence
     */
    public function occurDeletedAt(Occurrence $occurrence){
        $occurrence->deleted_at = Carbon::now();
        $occurrence->save();
    }

    /**
     * Toastr Message - Occurrence successfully deleted
     *
     * @return string   $text
     */
    public function occurDeleteMsg(){
        $text = __('occurrences.toastr-delete-sucess');

        return $text;
    }
}
