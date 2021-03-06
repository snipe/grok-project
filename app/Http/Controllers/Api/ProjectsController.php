<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        return response(Project::all()->jsonSerialize(), 200);
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
