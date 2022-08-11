<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Training;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $training = Training::where('user_id',Auth::user()->id)->get();
        return response()->json([
            'success' => true,
            'message' => 'training Details',
            'data' => $training,
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

        $training = new Training();

        $training->training_name = $request->input('training_name');
        $training->end = $request->input('end');
        $training->training_summary = $request->input('training_summary');
        $training->user_id = Auth::guard('sanctum')->user()->id;
        $training->save();

        return response()->json([
            'success' => true,
			'message' => 'Training store successfully',
			'data' => $training,

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

        $trainingUpdate = Training::find($id);

        // $trainingUpdate->training_name = $request->input('training_name');
        // $trainingUpdate->end = $request->input('end');
        // $trainingUpdate->training_summary = $request->input('training_summary');
        // $trainingUpdate->user_id = Auth::guard('sanctum')->user()->id;
        
        $trainingUpdate->update($request->all());

        return response()->json([
            'success' => true,
			'message' => 'Training update successfully',
			'data' => [
				'Training Update info' => $trainingUpdate,
			]

        ], 200);
    }

    public function destroy($id)
    {
        $trainingDelete = Training::find($id);
        $trainingDelete->delete();

        return response()->json([
            'success' => true,
			'message' => 'Training deleted successfully',
			'data' => [
				'training delete' => $trainingDelete,
			]

        ], 200);
    }
}
