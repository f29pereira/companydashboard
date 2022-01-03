<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller\Controller;
use App\Http\Traits\Companies\CompanyTrait;
use App\Http\Traits\Users\DepartmentTrait;
use App\Http\Traits\Nonconformities\OccurrenceTrait;

/**
 * Management - Controller
 */
class ManagementController extends Controller{
    use CompanyTrait, DepartmentTrait, OccurrenceTrait;

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

        //Occurrences count
        $occurrences = $this->occurrencesCount();

        return view('management.menu', compact('companies', 'departments', 'occurrences'));
    }
}
