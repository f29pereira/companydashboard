<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller\Controller;
use App\Http\Requests\CompanyPostRequest;
use App\Http\Traits\Users\CompanyTypeTrait;
use App\Http\Traits\Users\CompanyTrait;
use App\Models\Users\Company;
use App\Models\Users\User;

class CompanyController extends Controller
{
    use CompanyTypeTrait;
    use CompanyTrait;

    /**
     * Display the companies menu.
     *
     * @return \Illuminate\Http\Response
     */
    public function companiesMenu(){
        //Admin Authorization
        $this->authorize('is_admin');

        //Main company
        $company = $this->companyMain();

        //Companies count
        $count = $this->companyCount();

        //Company Types count
        $typesCount = $this->typeCount();

        return view('admin.companies.companies-menu', compact('company','count', 'typesCount'));
    }


    /**
     * Display a listing of companies.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //Admin Authorization
        $this->authorize('is_admin');

        //Main company
        $mainCompany = $this->companyMain();

        //Company List
        $companies = $this->companyList();

        return view('admin.companies.index', compact('mainCompany','companies'));
    }

    /**
     * Show the form for creating a new company.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //Admin Authorization
        $this->authorize('is_admin');

        //Main company
        $mainCompany = $this->companyMain();

        //Company Types List
        $companyTypes = $this->typeList();

        return view('admin.companies.create', compact('mainCompany', 'companyTypes'));
    }

    /**
     * Store a newly created company in storage.
     *
     * @param  \Http\Requests\CompanyPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyPostRequest $request){
        //Company Create - form data
        $company = Company::create($request->all());

        //Company Update - created_at
        $this->companyCreatedAt($company);

        //Message: company created
        $text = $this->companyCreateMsg($company);

        //Redirect: Companies List
        return redirect()->route('companies')->with('message', $text);
    }

    /**
     * Display the specified company.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //Admin Authorization
        $this->authorize('is_admin');

        //Specified company
        $company = Company::findOrFail($id);

        //Main company
        $mainCompany = $this->companyMain();

        return view('admin.companies.show', compact('company', 'mainCompany'));
    }

    /**
     * Show the form for editing the specified company.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //Admin Authorization
        $this->authorize('is_admin');

        //Specified Company
        $company = Company::findOrFail($id);

        //Main company
        $mainCompany = $this->companyMain();

        //Company Types
        $companyTypes = $this->typeList();

        return view('admin.companies.edit', compact('company', 'mainCompany' ,'companyTypes'));
    }

    /**
     * Update the specified company in storage.
     *
     * @param  \Http\Requests\CompanyPostRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyPostRequest $request, $id){
        //Specified Company
        $company = Company::findOrFail($id);

        //Company Update - form data
        $company->update($request->all());

        //Company Update - updated_at
        $this->companyUpdatedAt($company);

        //Message: company updated
        $text = $this->companyUpdateMsg($company);

        //Redirect: Companies List
        return redirect()->route('companies')->with('message', $text);
    }

    /**
     * Show the form for editing the main company.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editMain($id){
        //Admin Authorizations
        $this->authorize('is_admin');

        //Selected Company
        $company = Company::findOrFail($id);

        return view('admin.companies.edit-main', compact('company'));
    }

    /**
     * Update the specified company in storage.
     *
     * @param  \Http\Requests\CompanyPostRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateMain(CompanyPostRequest $request, $id){
        //Specified Company
        $company = Company::findOrFail($id);

        //Company Update - form data
        $company->update($request->all());

        //Company Update - updated_at
        $this->companyUpdatedAt($company);

        //Message: company updated
        $text = $this->companyUpdateMsg($company);

        //Redirect: Company Menu
        return redirect()->route('companiesMenu')->with('message', $text);
    }

    /**
     * Soft delete the selected company.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function softDelete($id){
        //Admin Authorizations
        $this->authorize('is_admin');

        //Specified Company
        $company = Company::findOrFail($id);

        //Company Delete
        $this->companyDelete($company);

        //Company Update - deleted_at
        $this->companyDeletedAt($company);

        //Users Mass Update to Default Company
        User::where('company_id', $id)->update(['company_id' => 1]);

        //Message: company deleted
        $text = $this->companyDeleteMsg($company);

        //Redirect: companies list
        return redirect()->route('companies')->with('message', $text);
    }
}
