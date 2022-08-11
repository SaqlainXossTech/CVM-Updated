<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\AdditonalInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdditionalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $additonalInfos = AdditonalInfo::where('user_id',Auth::user()->id)->get();
        return response()->json([
            'success' => true,
            'message' => 'Additional Details',
            'data' => $additonalInfos,
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

        $addition = new AdditonalInfo();

        $addition->skills = $request->input('skills');
        $addition->hobby = $request->input('hobby');
        $addition->language = $request->input('language');
        $addition->linkedin = $request->input('linkedin');
        $addition->github = $request->input('github');
        $addition->twitter = $request->input('twitter');
        $addition->behance = $request->input('behance');
        $addition->user_id = Auth::guard('sanctum')->user()->id;
        $addition->save();

        return response()->json([
            'success' => true,
			'message' => 'Additional info store successfully',
			'data' => $addition,

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

        $additionUpdate = AdditonalInfo::find($id);

        // $additionUpdate->skills = $request->input('skills');
        // $additionUpdate->hobby = $request->input('hobby');
        // $additionUpdate->language = $request->input('language');
        // $additionUpdate->linkedin = $request->input('linkedin');
        // $additionUpdate->github = $request->input('github');
        // $additionUpdate->twitter = $request->input('twitter');
        // $additionUpdate->behance = $request->input('behance');
        // $additionUpdate->user_id = Auth::guard('sanctum')->user()->id;
        
        $additionUpdate->update($request->all());

        return response()->json([
            'success' => true,
			'message' => 'Additional info updated successfully',
			'data' => [
				'additional info update' => $additionUpdate,
			]

        ], 200);
    }

    public function destroy($id)
    {
        $additionInfoDelete = AdditonalInfo::find($id);
        $additionInfoDelete->delete();

        return response()->json([
            'success' => true,
			'message' => 'Additional info deleted successfully',
			'data' => [
				'additional info delete' => $additionInfoDelete,
			]

        ], 200);
    }
}
