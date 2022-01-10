<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller\Controller;
use App\Http\Requests\Users\DepartmentPostRequest;
use App\Http\Traits\Users\DepartmentTrait;
use App\Http\Traits\Companies\CompanyTrait;
use App\Models\Users\Department;
use App\Models\Users\User;

/**
 * Departments - Controller
 */
class DepartmentController extends Controller{
    use DepartmentTrait, CompanyTrait;

    /**
     * Display a listing of departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //Admin Authorization
        $this->authorize('is_admin');

        //Main company
        $mainCompany = $this->companyMain();

        //Departments List
        $departments = $this->departmentList();

        return view('user.departments.index', compact('mainCompany', 'departments'));
    }

    /**
     * Show the form for creating a new department.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //Admin Authorization
        $this->authorize('is_admin');

        return view('user.departments.create');
    }

    /**
     * Store a newly created department in storage.
     *
     * @param  App\Http\Requests\Users\DepartmentPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentPostRequest $request){
        //Department Create - form data
        $department = Department::create($request->all());

        //Department Update - created_at
        $this->departmentCreatedAt($department);

        //Message: department created
        $text = $this->departmentCreateMsg($department);

        //Redirect: Departments List
        return redirect()->route('departments')->with('message', $text);
    }

    /**
     * Show the form for editing the specified department.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //Admin Authorization
        $this->authorize('is_admin');

        //Specified department
        $department = Department::findOrFail($id);

        return view('user.departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Users\DepartmentPostRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartmentPostRequest $request, $id){
        //Specified department
        $department = Department::findOrFail($id);

        //Department Update - form data
        $department->update($request->all());

        //Department Update - updated_at
        $this->departmentUpdatedAt($department);

        //Message: department updated
        $text = $this->departmentUpdateMsg($department);

        //Redirect: Departments List
        return redirect()->route('departments')->with('message', $text);
    }

    /**
     * Soft delete the selected department.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function softDelete($id){
        //Admin Authorizations
        $this->authorize('is_admin');

        //Specified Department
        $department = Department::findOrFail($id);

        //Department Delete
        $this->departmentDelete($department);

        //Department Update - deleted_at
        $this->departmentDeletedAt($department);

        //Users Mass Update to Default Department
        User::where('department_id', $id)->update(['department_id' => 1]);

        //Message: department deleted
        $text = $this->departmentDeleteMsg($department);

        //Redirect: Departments List
        return redirect()->route('departments')->with('message', $text);
    }
}
