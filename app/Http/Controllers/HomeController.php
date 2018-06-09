<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Company;
use Auth;

class HomeController extends Controller
{
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::where('user_id', Auth::user()->id)->with('projects')->get();
        return view('home')->with('companies', $companies);
    }
}
