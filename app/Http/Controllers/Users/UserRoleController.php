<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller\Controller;
use App\Http\Traits\Users\UserRoleTrait;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    use UserRoleTrait;

    /**
     * Display a listing of roles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //Admin Authorization
        $this->authorize('is_admin');

        //Users List
        $roles = $this->roleList();

        return view('admin.roles.index', compact('roles'));
    }
}
