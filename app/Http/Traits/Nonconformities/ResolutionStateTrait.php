<?php

namespace App\Http\Traits\Nonconformities;
use Illuminate\Support\Facades\DB;
use App\Models\Nonconformities\ResolutionState;

/**
 * Resolution State - Trait
 */
trait ResolutionStateTrait{
    /**
     * List of resolution states
     *
     * @return array[] $list
     */
    public function statesList(){
        $list = DB::table('resolution_states')->get();

        return $list;
    }
}
