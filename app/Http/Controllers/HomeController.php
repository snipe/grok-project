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
        $projects = Project::where('user_id', Auth::user()->id);

        // The user has one project - let's direct them there to save them a click
        if ($projects->count() == 1) {
            $project = Project::where('user_id', Auth::user()->id)->first();
            return redirect()->route('project.show', ['id' => $project->id]);
        }

        $companies = Company::where('user_id', Auth::user()->id)->with('projects')->get();
        return view('home')->with('companies', $companies);
    }
}
