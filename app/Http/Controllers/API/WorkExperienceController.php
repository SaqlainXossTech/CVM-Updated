<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\WorkExp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = WorkExp::where('user_id',Auth::user()->id)->get();
        return response()->json([
            'success' => true,
            'message' => 'Work Experience Details',
            'data' => $experiences,
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

        $experience = new WorkExp();

        $experience->company_name = $request->input('company_name');
        $experience->position = $request->input('position');
        $experience->start = $request->input('start');
        $experience->end = $request->input('end');
        $experience->work_summary = $request->input('work_summary');
        $experience->location = $request->input('location');
        $experience->user_id = Auth::guard('sanctum')->user()->id;
        $experience->save();

        return response()->json([
            'success' => true,
			'message' => 'Experience store successfully',
			'data' => $experience,

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

        $experienceUpdate = WorkExp::find($id);

        // $experienceUpdate->company_name = $request->input('company_name');
        // $experienceUpdate->position = $request->input('position');
        // $experienceUpdate->start = $request->input('start');
        // $experienceUpdate->end = $request->input('end');
        // $experienceUpdate->work_summary = $request->input('work_summary');
        // $experienceUpdate->location = $request->input('location');
        // $experienceUpdate->user_id = Auth::guard('sanctum')->user()->id;
        
        $experienceUpdate->update($request->all());

        return response()->json([
            'success' => true,
			'message' => 'Experience update successfully',
			'data' => [
				'Experience Update info' => $experienceUpdate,
			]

        ], 200);
    }

    public function destroy($id)
    {
        $experienceDelete = WorkExp::find($id);
        $experienceDelete->delete();

        return response()->json([
            'success' => true,
			'message' => 'Experience info deleted successfully',
			'data' => [
				'Experience info delete' => $experienceDelete,
			]

        ], 200);
    }
}
