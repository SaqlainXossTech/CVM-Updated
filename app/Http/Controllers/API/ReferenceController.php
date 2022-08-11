<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $references = Reference::where('user_id',Auth::user()->id)->get();      //where('user_id', Auth::guard('sanctum')->user()->id)->first(); 
        return response()->json([
            'success' => true,
            'message' => 'Reference Details',
            'data' => $references,
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

        $reference = new Reference();

        $reference->name = $request->input('name');
        $reference->designation = $request->input('designation');
        $reference->organization = $request->input('organization');
        $reference->email = $request->input('email');
        $reference->mobile = $request->input('mobile');
        //$reference->user_id = $request->input('user_id');
        $reference->user_id = Auth::guard('sanctum')->user()->id;
        //$reference->token = DB::select('select token from personal_access_tokens where tokenable_id=6');
        $reference->save();

        return response()->json([
            'success' => true,
			'message' => 'Reference store successfully',
			'data' => $reference,

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

        $referenceUpdate = Reference::find($id);

        // $referenceUpdate->name = $request->input('name');
        // $referenceUpdate->designation = $request->input('designation');
        // $referenceUpdate->organization = $request->input('organization');
        // $referenceUpdate->email = $request->input('email');
        // $referenceUpdate->mobile = $request->input('mobile');
        // $referenceUpdate->user_id = Auth::guard('sanctum')->user()->id;
        
        $referenceUpdate->update($request->all());

        return response()->json([
            'success' => true,
			'message' => 'Reference updated successfully',
			'data' => [
				'reference update' => $referenceUpdate,
			]

        ], 200);
    }

    public function destroy($id)
    {
        $referenceDelete = Reference::find($id);
        $referenceDelete->delete();

        return response()->json([
            'success' => true,
			'message' => 'Reference deleted successfully',
			'data' => [
				'reference delete' => $referenceDelete,
			]

        ], 200);
    }
}
