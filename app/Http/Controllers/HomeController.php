<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller\Controller;
use App\Http\Traits\Users\AuthUserTrait;

/**
 * Home - Controller
 */
class HomeController extends Controller{
    use AuthUserTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        //Authenticated User Name
        $userName = $this->authName();

        return view('home', compact('userName'));
    }
}
