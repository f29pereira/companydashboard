<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller\Controller;
use App\Http\Traits\Users\UserTrait;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    use UserTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        //Authenticated User
        $userName = $this->userName(Auth::user());

        return view('home', compact('userName'));
    }
}
