<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\InterviewTips;
use Illuminate\Http\Request;

class InterviewTipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tips = InterviewTips::get();

        return response()->json([
            'success' => true,
            'message' => 'All Interview Tips Fetched',
            'tips data' => $tips,

        ], 200);
    }
}
