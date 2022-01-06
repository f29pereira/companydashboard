<?php

namespace App\Http\Controllers\Nonconformities;

use App\Http\Controllers\Controller\Controller;
use App\Http\Traits\Nonconformities\NonconformityTrait;
use App\Http\Traits\Nonconformities\OccurrenceTrait;
use App\Http\Requests\Nonconformities\NonconformityPostRequest;
use Illuminate\Http\Request;

class NonconformityController extends Controller{
    use NonconformityTrait, OccurrenceTrait;

    /**
     * Display a nonconformities/occurrences menu
     *
     * @return \Illuminate\Http\Response
     */
    public function ncsOccurrencesMenu(){
        //Admin Authorization
        $this->authorize('is_admin');

        //Nonconformities Count
        $ncs = $this->ncsCount();

        //Occurrences Count
        $occurrences = $this->occurrencesCount();

        return view('nonconformity.menu', compact('ncs','occurrences'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
