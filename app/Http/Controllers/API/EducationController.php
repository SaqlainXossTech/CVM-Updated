<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::where('user_id',Auth::user()->id)->get();
        return response()->json([
            'success' => true,
            'message' => 'Education Details',
            'data' => $educations,
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

        $education = new Education();

        $education->inst_name = $request->input('inst_name');
        $education->degree = $request->input('degree');
        $education->dept = $request->input('dept');
        $education->pass_year = $request->input('pass_year');
        $education->result = $request->input('result');
        $education->board = $request->input('board');
        $education->user_id = Auth::guard('sanctum')->user()->id;

        $education->save();

        return response()->json([
            'success' => true,
			'message' => 'Educational info store successfully',
			'data' => $education,

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

        $educationUpdate = Education::find($id);

        // $educationUpdate->inst_name = $request->input('inst_name');
        // $educationUpdate->degree = $request->input('degree');
        // $educationUpdate->dept = $request->input('dept');
        // $educationUpdate->pass_year = $request->input('pass_year');
        // $educationUpdate->result = $request->input('result');
        // $educationUpdate->board = $request->input('board');
        // $educationUpdate->user_id = Auth::guard('sanctum')->user()->id;

        $educationUpdate->update($request->all());

        return response()->json([
            'success' => true,
			'message' => 'Educational info updated successfully',
			'data' => [
				'Educational info update' => $educationUpdate,
			]

        ], 200);
    }

    public function destroy($id)
    {
        $educaionInfoDelete = Education::find($id);
        $educaionInfoDelete->delete();

        return response()->json([
            'success' => true,
			'message' => 'Educational info deleted successfully',
			'data' => [
				'Educational info delete' => $educaionInfoDelete,
			]

        ], 200);
    }
}
