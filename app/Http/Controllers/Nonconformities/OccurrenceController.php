<?php

namespace App\Http\Controllers\Nonconformities;

use App\Http\Controllers\Controller\Controller;
use App\Models\Nonconformities\Occurrence;
use App\Http\Traits\Companies\CompanyTrait;
use App\Http\Traits\Nonconformities\OccurrenceTrait;
use App\Http\Traits\Nonconformities\ResolutionStateTrait;
use App\Http\Requests\Nonconformities\OccurrencePostRequest;

class OccurrenceController extends Controller {
    use OccurrenceTrait, ResolutionStateTrait, CompanyTrait;

    /**
     * Display a listing of occurrences.
     */
    public function index(){
        //Admin Authorization
        $this->authorize('is_admin');

        //Occurrences List
        $occurrences = $this->occurrencesList();

        return view('nonconformity.occurrences.index', compact('occurrences'));
    }

    /**
     * Display a listing of the not solved occurrences.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexNotSolved(){
        //Admin Authorization
        $this->authorize('is_admin');

        //Occurrences List
        $occurrences = $this->occurNotSolvedList();

        return view('nonconformity.occurrences.index', compact('occurrences'));
    }

    /**
     * Display a listing of the solving occurrences.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSolving(){
        //Admin Authorization
        $this->authorize('is_admin');

        //Occurrences List
        $occurrences = $this->occurSolvingList();

        return view('nonconformity.occurrences.index', compact('occurrences'));
    }

    /**
     * Display a listing of the solved occurrences.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSolved(){
        //Admin Authorization
        $this->authorize('is_admin');

        //Occurrences List
        $occurrences = $this->occurSolvedList();

        return view('nonconformity.occurrences.index', compact('occurrences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //Admin Authorization
        $this->authorize('is_admin');

        //Main Company
        $mainCompany = $this->companyMain();

        //Companies List
        $companies = $this->companyList();

        //Resolution States List
        $states = $this->statesList();

        return view('nonconformity.occurrences.create', compact('mainCompany','companies','states'));
    }

    /**
     * Store a newly created occurrence in storage.
     *
     * @param  App\Http\Requests\Nonconformities\OccurrencePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OccurrencePostRequest  $request){
        //Occurrence Create - form data
        $occurrence = Occurrence::create($request->all());

        //Occurrence Update - created_at
        $this->occurCreatedAt($occurrence);

        //Message: occurrence created
        $text = $this->occurCreateMsg();

        //Redirect: Occurrences List
        return redirect()->route('occurrences')->with('message', $text);
    }

    /**
     * Display the specified occurrence.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //Admin Authorization
        $this->authorize('is_admin');

        //Specified occurrence
        $occurrence = Occurrence::findOrFail($id);

        return view('nonconformity.occurrences.show', compact('occurrence'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //Admin Authorization
        $this->authorize('is_admin');

        //Specified occurrence
        $occurrence = Occurrence::findOrFail($id);

        //Companies
        $companies = $this->companyMainList();

        //Resolution States
        $states = $this->statesList();

        return view('nonconformity.occurrences.edit', compact('occurrence','companies','states'));
    }

    /**
     * Update the specified occurrance in storage.
     *
     * @param  App\Http\Requests\Nonconformities\OccurrencePostRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OccurrencePostRequest $request, $id){
        //Specified Occurrence
        $occurrence = Occurrence::findOrFail($id);

        //Occurrence Update - form data
        $occurrence->update($request->all());

        //Occurrence Update - updated_at
        $this->occurUpdatedAt($occurrence);

        //Message: occurrence updated
        $text = $this->occurUpdateMsg();

        //Redirect: Occurrences List
        return redirect()->route('occurrences')->with('message', $text);
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

    /**
     * Soft delete the selected occurrence.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function softDelete($id){
        //Specified Occurrence
        $occurrence = Occurrence::findOrFail($id);

        //Occurrence Delete
        $this->occurDelete($occurrence);

        //Occurrence Update - deleted_at
        $this->occurDeletedAt($occurrence);

        //Message: occurrance deleted
        $text = $this->occurDeleteMsg();

        //Redirect: Occurrences List
        return redirect()->route('occurrences')->with('message', $text);
    }
}
