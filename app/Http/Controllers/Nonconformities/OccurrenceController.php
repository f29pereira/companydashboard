<?php

namespace App\Http\Controllers\Nonconformities;

use Symfony\Component\HttpFoundation\Request;

use App\Http\Controllers\Controller\Controller;
use App\Models\Nonconformities\Occurrence;
use App\Http\Traits\Nonconformities\OccurrenceTrait;

class OccurrenceController extends Controller {
    use OccurrenceTrait;

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
