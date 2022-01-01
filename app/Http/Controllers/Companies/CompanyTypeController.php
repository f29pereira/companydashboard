<?php

namespace App\Http\Controllers\Companies;

use App\Http\Controllers\Controller\Controller;
use App\Http\Requests\CompanyTypePostRequest;
use App\Http\Traits\Companies\CompanyTypeTrait;
use App\Http\Traits\Companies\CompanyTrait;
use App\Models\Companies\CompanyType;
use App\Models\Companies\Company;

/**
 * Company Types - Controller
 */
class CompanyTypeController extends Controller{
    use CompanyTypeTrait;
    use CompanyTrait;

    /**
     * Display a listing of company types.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //Admin Authorization
        $this->authorize('is_admin');

        //Main company
        $mainCompany = $this->companyMain();

        //Company Type List
        $companyTypes = $this->typeList();

        return view('company.company-types.index', compact('mainCompany','companyTypes'));
    }

    /**
     * Show the form for creating a company type.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //Admin Authorization
        $this->authorize('is_admin');

        return view('company.company-types.create');
    }

    /**
     * Store a newly created company type in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyTypePostRequest $request){
        //Company Type Create - form data
        $companyType = CompanyType::create($request->all());

        //Company Type Update - created_at
        $this->typeCreatedAt($companyType);

        //Message: company type created
        $text = $this->typeCreateMsg($companyType);

        //Redirect: Company Types List
        return redirect()->route('types')->with('message', $text);
    }

    /**
     * Show the form for editing the specified company type.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //Admin Authorization
        $this->authorize('is_admin');

        //Specified Company Type
        $companyType = CompanyType::findOrFail($id);

        return view('company.company-types.edit', compact('companyType'));
    }

    /**
     * Update the specified company type in storage.
     *
     * @param  App\Http\Requests\CompanyTypePostRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyTypePostRequest $request, $id){
        //Specified Company Type
        $companyType = CompanyType::findOrFail($id);

        //Company Type Update - form data
        $companyType->update($request->all());

        //Company Type Update - updated_at
        $this->typeUpdatedAt($companyType);

        //Message: company type updated
        $text = $this->typeUpdateMsg($companyType);

        //Redirect: Company Types List
        return redirect()->route('types')->with('message', $text);
    }

    /**
     * Soft delete the selected company type.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function softDelete($id){
        //Admin Authorizations
        $this->authorize('is_admin');

        //Specified Company Type
        $companyType = CompanyType::findOrFail($id);

        //Company Type Delete
        $this->typeDelete($companyType);

        //Company Type Update - deleted_at
        $this->typeDeletedAt($companyType);

        //Companies Mass Update to Default Company Type
        Company::where('company_types_id', $id)->update(['company_types_id' => 1]);

        //Message: company type deleted
        $text = $this->typeDeleteMsg($companyType);

        //Redirect: Company Types List
        return redirect()->route('types')->with('message', $text);
    }
}
