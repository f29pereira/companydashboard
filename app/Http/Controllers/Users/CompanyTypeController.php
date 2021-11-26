<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller\Controller;
use App\Http\Requests\CompanyTypePostRequest;
use App\Http\Traits\Users\CompanyTypeTrait;
use App\Http\Traits\Users\CompanyTrait;
use App\Models\Users\CompanyType;
use App\Models\Users\Company;

class CompanyTypeController extends Controller
{
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
        $companyTypes = $this->companyTypeList();

        return view('admin.company-types.index', compact('mainCompany','companyTypes'));
    }

    /**
     * Show the form for creating a company type.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //Admin Authorization
        $this->authorize('is_admin');

        return view('admin.company-types.create');
    }

    /**
     * Store a newly created company type in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyTypePostRequest $request){
        //Company Type Create
        $companyType = CompanyType::create($request->all());

        //Redirect
        return redirect()->route('types');
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

        return view('admin.company-types.edit', compact('companyType'));
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

        //Company Type Update
        $companyType->update($request->all());

        //Redirect: Company Types List
        return redirect()->route('types');
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

        if($companyType->is_deleted == false){
            $companyType->is_deleted = true;
            $companyType->save();
        }

        //Companies Mass Update to Default Company Type
        Company::where('company_types_id', $id)->update(['company_types_id' => 1]);

        //Redirect: Company Types List
        return redirect()->route('types');
    }
}
