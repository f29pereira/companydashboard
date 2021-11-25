<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller\Controller;
use App\Http\Traits\Users\CompanyTrait;
use App\Http\Traits\Users\DepartmentTrait;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    use CompanyTrait;
    use DepartmentTrait;

    /**
     * Display a management menu.
     *
     * @return \Illuminate\Http\Response
     */
    public function managementMenu(){
        //Admin Authorization
        $this->authorize('is_admin');

        //Companies count
        $companies = $this->companyCount();

        //Departments count
        $departments = $this->departmentCount();

        return view('management.menu', compact('companies', 'departments'));
    }
}
