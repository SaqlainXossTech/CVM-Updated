<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $additonalInfos = DB::table('additonal_infos')->where('user_id', Auth::id())->get();
        $additonalCount = DB::table('additonal_infos')->where('user_id', Auth::id())->count();
        $projects = DB::table('projects')->where('user_id', Auth::id())->get();
        $projectCount = DB::table('projects')->where('user_id', Auth::id())->count();
        $education = DB::table('education')->where('user_id', Auth::id())->get();
        $educationCount = DB::table('education')->where('user_id', Auth::id())->count();
        $personal_infos = DB::table('personal_infos')->where('user_id', Auth::id())->get();
        $personal_infoCount = DB::table('personal_infos')->where('user_id', Auth::id())->count();
        $references = DB::table('references')->where('user_id', Auth::id())->get();
        $referenceCount = DB::table('references')->where('user_id', Auth::id())->count();
        $experiences = DB::table('work_exps')->where('user_id', Auth::id())->get();
        $experienceCount = DB::table('work_exps')->where('user_id', Auth::id())->count();
        $trainings = DB::table('trainings')->where('user_id', Auth::id())->get();
        $trainingCount = DB::table('trainings')->where('user_id', Auth::id())->count();

        return response()->json([
            'success' => true,
            'message' => 'Profile All Details',
            'additonalInfos data' => ['count' => $additonalCount,'additonalInfos' => $additonalInfos],
            'projects data' => ['count' => $projectCount,'projects' => $projects],
            'education data' => ['count' => $educationCount,'education' => $education],
            'personal_infos data' => ['count' => $personal_infoCount,'personal_infos' => $personal_infos],
            'references data' => ['count' => $referenceCount,'references' => $references],
            'experiences data' => ['count' => $experienceCount,'experiences' => $experiences],
            'trainings data' => ['count' => $trainingCount,'trainings' => $trainings],
            
        ], 200);
    }
    
    //API for version-2
    
    public function index_v2()
    {
        $additonalInfos = DB::table('additonal_infos')->where('user_id', Auth::id())->get();
        $additonalCount = DB::table('additonal_infos')->where('user_id', Auth::id())->count();
        $projects = DB::table('projects')->where('user_id', Auth::id())->get();
        $projectCount = DB::table('projects')->where('user_id', Auth::id())->count();
        $education = DB::table('education')->where('user_id', Auth::id())->get();
        $educationCount = DB::table('education')->where('user_id', Auth::id())->count();
        $personal_infos = DB::table('personal_infos')->where('user_id', Auth::id())->get();
        $personal_infoCount = DB::table('personal_infos')->where('user_id', Auth::id())->count();
        $references = DB::table('references')->where('user_id', Auth::id())->get();
        $referenceCount = DB::table('references')->where('user_id', Auth::id())->count();
        $experiences = DB::table('work_exps')->where('user_id', Auth::id())->get();
        $experienceCount = DB::table('work_exps')->where('user_id', Auth::id())->count();
        $trainings = DB::table('trainings')->where('user_id', Auth::id())->get();
        $trainingCount = DB::table('trainings')->where('user_id', Auth::id())->count();

        return response()->json([
            'success' => true,
            'message' => 'Profile All Details',
            'additonalInfos_data' => ['count' => $additonalCount,'additonalInfos' => $additonalInfos],
            'projects_data' => ['count' => $projectCount,'projects' => $projects],
            'education_data' => ['count' => $educationCount,'education' => $education],
            'personal_infos_data' => ['count' => $personal_infoCount,'personal_infos' => $personal_infos],
            'references_data' => ['count' => $referenceCount,'references' => $references],
            'experiences_data' => ['count' => $experienceCount,'experiences' => $experiences],
            'trainings_data' => ['count' => $trainingCount,'trainings' => $trainings],
            
        ], 200);
    }
}
