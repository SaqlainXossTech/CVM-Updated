<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function index()
    {
        $jobs = Job::orderBy('id', 'asc')->get();
        return response()->json([
            'success' => true,
            'message' => 'Job Details',
            'data' => $jobs,
        ], 200);
    }

    public function store(Request $request)
    {

        $job = new Job();

        $job->job_title = $request->input('job_title');
        $job->company_name = $request->input('company_name');
        $job->category = $request->input('category');
        $job->location = $request->input('location');
        $job->apply_link = $request->input('apply_link');
        $job->pdf_link = $request->input('pdf_link');
        $job->end_date = $request->input('end_date');
        $job->save();

        return response()->json([
            'success' => true,
			'message' => 'job store successfully',
			'job info' => $job,

        ], 200);

    }
}
