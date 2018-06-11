<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Section;
use Auth;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::where('user_id', Auth::user()->id)->with('companies')->get();
        return view('projects.index')->with('projects', $projects);
    }

    public function show($project_id) {
        $project = Project::with('testenvs', 'members')->find($project_id);
        $sections = Section::where('project_id', $project_id)->where('parent_id',0)->with('requirements', 'testcases', 'subsections')->get();
        return view('projects.show')->with('sections', $sections)->with('project', $project);
    }

    public function tests($project_id) {
        $project = Project::with('testenvs')->find($project_id);
        $sections = Section::where('project_id', $project_id)->where('parent_id',0)->with('requirements', 'testcases', 'subsections')->get();
        return view('projects.tests')->with('sections', $sections)->with('project', $project);
    }

    public function create(Request $request)
    {
        $project = new Project();
        $project->name = $request->name;
        $project->slug = str_slug($project->name);
        $project->save();

        return response($project->jsonSerialize(), 200);
    }



    public function destroy($id)
    {
        Project::destroy($id);
        return response(null, 200);
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->name = $request->name;
        $project->slug = str_slug($project->name);
        $project->save();

        return response(null, 200);
    }

}
