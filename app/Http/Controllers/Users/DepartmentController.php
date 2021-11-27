<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller\Controller;
use App\Http\Requests\DepartmentPostRequest;
use App\Http\Traits\Users\DepartmentTrait;
use App\Http\Traits\Users\CompanyTrait;
use App\Models\Users\Department;
use Illuminate\Http\Request;
use App\Models\Users\User;

class DepartmentController extends Controller
{
    use DepartmentTrait;
    use CompanyTrait;

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

        return view('admin.departments.index', compact('mainCompany', 'departments'));
    }

    /**
     * Show the form for creating a new department.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //Admin Authorization
        $this->authorize('is_admin');

        return view('admin.departments.create');
    }

    /**
     * Store a newly created company in storage.
     *
     * @param  App\Http\Requests\DepartmentPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentPostRequest $request){
        //New Department
        $department = Department::create($request->all());

        //Redirect: Departments List
        return redirect()->route('departments');
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

        return view('admin.departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\DepartmentPostRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartmentPostRequest $request, $id){
        //Specified department
        $department = Department::findOrFail($id);

        //Department Update
        $department->update($request->all());

        //Redirect: Departments List
        return redirect()->route('departments');
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

        if($department->is_deleted == false){
            $department->is_deleted = true;
            $department->save();
        }

        //Users Mass Update to Default Department
        User::where('department_id', $id)->update(['department_id' => 1]);

        //Redirect: Departments List
        return redirect()->route('departments');
    }
}
