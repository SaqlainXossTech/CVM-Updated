<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::where('user_id',Auth::user()->id)->get();
        return response()->json([
            'success' => true,
            'message' => 'Projects Details',
            'data' => $projects,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $project = new Project();

        $project->project_name = $request->input('project_name');
        $project->start = $request->input('start');
        $project->end = $request->input('end');
        $project->project_summary = $request->input('project_summary');
        $project->user_id = Auth::guard('sanctum')->user()->id;
        $project->save();

        return response()->json([
            'success' => true,
			'message' => 'Project store successfully',
			'data' => $project,

        ], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InfoUpdate  $InfoUpdate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $projectUpdate = Project::find($id);

        // $projectUpdate->project_name = $request->input('project_name');
        // $projectUpdate->start = $request->input('start');
        // $projectUpdate->end = $request->input('end');
        // $projectUpdate->project_summary = $request->input('project_summary');
        // $projectUpdate->user_id = Auth::guard('sanctum')->user()->id;
        
        $projectUpdate->update($request->all());

        return response()->json([
            'success' => true,
			'message' => 'Project update successfully',
			'data' => [
				'Project Update info' => $projectUpdate,
			]

        ], 200);
    }

    public function destroy($id)
    {
        $projectDelete = Project::find($id);
        $projectDelete->delete();

        return response()->json([
            'success' => true,
			'message' => 'Project deleted successfully',
			'data' => [
				'project delete' => $projectDelete,
			]

        ], 200);
    }
}
