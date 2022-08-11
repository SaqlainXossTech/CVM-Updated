<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\PersonalInfo;
use App\Models\Project;
use App\Models\Reference;
use App\Models\SocialMedia;
use App\Models\WorkExp;
use Illuminate\Support\Facades\DB;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ResumeController extends Controller
{
    public function view($mobile)
    {
        $cv = DB::table('cvs')->get();
        $num = DB::table('users')->where('mobile', $mobile)->value('mobile');

        return view('resume', compact('cv','num'));
    }

    public function number($id)
    {
        $cv = DB::table('cvs')->where('id',$id)->get();

        return view('number', compact('cv'));
    }

    //public function resume(Request $request,$id,$num)
    public function resume(Request $request,$id,$num)
    {
        if($id == 1)
        {
            $cv = DB::table('cvs')->where('id',$id)->get();
            $id = DB::table('users')->where('mobile', $num)->value('id');

            $additonalInfos = DB::table('additonal_infos')->where('user_id', $id)->get();
            $projects = DB::table('projects')->where('user_id', $id)->get();
            $education = DB::table('education')->where('user_id', $id)->get();
            $personal_infos = DB::table('personal_infos')->where('user_id', $id)->get();
            $references = DB::table('references')->where('user_id', $id)->get();
            $experiences = DB::table('work_exps')->where('user_id', $id)->get();
            $socials = DB::table('social_media')->where('user_id', $id)->get();
            $trainings = DB::table('trainings')->where('user_id', $id)->get();

            return view('templete-1', compact('cv','additonalInfos','projects','education','personal_infos','references','experiences','socials','trainings'));
        }

        elseif($id == 2)
        {
            $cv = DB::table('cvs')->where('id',$id)->get();

            $num = $request->num;
            $id = DB::table('users')->where('mobile', $request->num)->value('id');

            $additonalInfos = DB::table('additonal_infos')->where('user_id', $id)->get();
            $projects = DB::table('projects')->where('user_id', $id)->get();
            $education = DB::table('education')->where('user_id', $id)->get();
            $personal_infos = DB::table('personal_infos')->where('user_id', $id)->get();
            $references = DB::table('references')->where('user_id', $id)->get();
            $experiences = DB::table('work_exps')->where('user_id', $id)->get();
            $socials = DB::table('social_media')->where('user_id', $id)->get();
            $trainings = DB::table('trainings')->where('user_id', $id)->get();

            return view('templete-2', compact('cv','additonalInfos','projects','education','personal_infos','references','experiences','socials','trainings'));
        }

        elseif($id == 3)
        {
            $cv = DB::table('cvs')->where('id',$id)->get();

            $num = $request->num;
            $id = DB::table('users')->where('mobile', $request->num)->value('id');

            $additonalInfos = DB::table('additonal_infos')->where('user_id', $id)->get();
            $projects = DB::table('projects')->where('user_id', $id)->get();
            $education = DB::table('education')->where('user_id', $id)->get();
            $personal_infos = DB::table('personal_infos')->where('user_id', $id)->get();
            $references = DB::table('references')->where('user_id', $id)->get();
            $experiences = DB::table('work_exps')->where('user_id', $id)->get();
            $socials = DB::table('social_media')->where('user_id', $id)->get();
            $trainings = DB::table('trainings')->where('user_id', $id)->get();

            return view('templete-3', compact('cv','additonalInfos','projects','education','personal_infos','references','experiences','socials','trainings'));
        }

        elseif($id == 4)
        {
            $cv = DB::table('cvs')->where('id',$id)->get();

            $num = $request->num;
            $id = DB::table('users')->where('mobile', $request->num)->value('id');

            $additonalInfos = DB::table('additonal_infos')->where('user_id', $id)->get();
            $projects = DB::table('projects')->where('user_id', $id)->get();
            $education = DB::table('education')->where('user_id', $id)->get();
            $personal_infos = DB::table('personal_infos')->where('user_id', $id)->get();
            $references = DB::table('references')->where('user_id', $id)->get();
            $experiences = DB::table('work_exps')->where('user_id', $id)->get();
            $socials = DB::table('social_media')->where('user_id', $id)->get();
            $trainings = DB::table('trainings')->where('user_id', $id)->get();

            return view('templete-4', compact('cv','additonalInfos','projects','education','personal_infos','references','experiences','socials','trainings'));
        }

        elseif($id == 5)
        {
            $cv = DB::table('cvs')->where('id',$id)->get();

            $num = $request->num;
            $id = DB::table('users')->where('mobile', $request->num)->value('id');

            $additonalInfos = DB::table('additonal_infos')->where('user_id', $id)->get();
            $projects = DB::table('projects')->where('user_id', $id)->get();
            $education = DB::table('education')->where('user_id', $id)->get();
            $personal_infos = DB::table('personal_infos')->where('user_id', $id)->get();
            $references = DB::table('references')->where('user_id', $id)->get();
            $experiences = DB::table('work_exps')->where('user_id', $id)->get();
            $socials = DB::table('social_media')->where('user_id', $id)->get();
            $trainings = DB::table('trainings')->where('user_id', $id)->get();

            return view('templete-5', compact('cv','additonalInfos','projects','education','personal_infos','references','experiences','socials','trainings'));
        }

        elseif($id == 6)
        {
            $cv = DB::table('cvs')->where('id',$id)->get();

            $num = $request->num;
            $id = DB::table('users')->where('mobile', $request->num)->value('id');

            $additonalInfos = DB::table('additonal_infos')->where('user_id', $id)->get();
            $projects = DB::table('projects')->where('user_id', $id)->get();
            $education = DB::table('education')->where('user_id', $id)->get();
            $personal_infos = DB::table('personal_infos')->where('user_id', $id)->get();
            $references = DB::table('references')->where('user_id', $id)->get();
            $experiences = DB::table('work_exps')->where('user_id', $id)->get();
            $socials = DB::table('social_media')->where('user_id', $id)->get();
            $trainings = DB::table('trainings')->where('user_id', $id)->get();

            return view('templete-6', compact('cv','additonalInfos','projects','education','personal_infos','references','experiences','socials','trainings'));
        }

        elseif($id == 7)
        {
            $cv = DB::table('cvs')->where('id',$id)->get();

            $num = $request->num;
            $id = DB::table('users')->where('mobile', $request->num)->value('id');

            $additonalInfos = DB::table('additonal_infos')->where('user_id', $id)->get();
            $projects = DB::table('projects')->where('user_id', $id)->get();
            $education = DB::table('education')->where('user_id', $id)->get();
            $personal_infos = DB::table('personal_infos')->where('user_id', $id)->get();
            $references = DB::table('references')->where('user_id', $id)->get();
            $experiences = DB::table('work_exps')->where('user_id', $id)->get();
            $socials = DB::table('social_media')->where('user_id', $id)->get();
            $trainings = DB::table('trainings')->where('user_id', $id)->get();

            return view('templete-7', compact('cv','additonalInfos','projects','education','personal_infos','references','experiences','socials','trainings'));
        }

        elseif($id == 8)
        {
            $cv = DB::table('cvs')->where('id',$id)->get();

            $num = $request->num;
            $id = DB::table('users')->where('mobile', $request->num)->value('id');

            $additonalInfos = DB::table('additonal_infos')->where('user_id', $id)->get();
            $projects = DB::table('projects')->where('user_id', $id)->get();
            $education = DB::table('education')->where('user_id', $id)->get();
            $personal_infos = DB::table('personal_infos')->where('user_id', $id)->get();
            $references = DB::table('references')->where('user_id', $id)->get();
            $experiences = DB::table('work_exps')->where('user_id', $id)->get();
            $socials = DB::table('social_media')->where('user_id', $id)->get();
            $trainings = DB::table('trainings')->where('user_id', $id)->get();

            return view('templete-8', compact('cv','additonalInfos','projects','education','personal_infos','references','experiences','socials','trainings'));
        }

        elseif($id == 9)
        {
            $cv = DB::table('cvs')->where('id',$id)->get();

            $num = $request->num;
            $id = DB::table('users')->where('mobile', $request->num)->value('id');

            $additonalInfos = DB::table('additonal_infos')->where('user_id', $id)->get();
            $projects = DB::table('projects')->where('user_id', $id)->get();
            $education = DB::table('education')->where('user_id', $id)->get();
            $personal_infos = DB::table('personal_infos')->where('user_id', $id)->get();
            $references = DB::table('references')->where('user_id', $id)->get();
            $experiences = DB::table('work_exps')->where('user_id', $id)->get();
            $socials = DB::table('social_media')->where('user_id', $id)->get();
            $trainings = DB::table('trainings')->where('user_id', $id)->get();

            return view('templete-9', compact('cv','additonalInfos','projects','education','personal_infos','references','experiences','socials','trainings'));
        }

        elseif($id == 10)
        {
            $cv = DB::table('cvs')->where('id',$id)->get();

            $num = $request->num;
            $id = DB::table('users')->where('mobile', $request->num)->value('id');

            $additonalInfos = DB::table('additonal_infos')->where('user_id', $id)->get();
            $projects = DB::table('projects')->where('user_id', $id)->get();
            $education = DB::table('education')->where('user_id', $id)->get();
            $personal_infos = DB::table('personal_infos')->where('user_id', $id)->get();
            $references = DB::table('references')->where('user_id', $id)->get();
            $experiences = DB::table('work_exps')->where('user_id', $id)->get();
            $socials = DB::table('social_media')->where('user_id', $id)->get();
            $trainings = DB::table('trainings')->where('user_id', $id)->get();

            return view('templete-10', compact('cv','additonalInfos','projects','education','personal_infos','references','experiences','socials','trainings'));
        }

        elseif($id == 11)
        {
            $cv = DB::table('cvs')->where('id',$id)->get();

            $num = $request->num;
            $id = DB::table('users')->where('mobile', $request->num)->value('id');

            $additonalInfos = DB::table('additonal_infos')->where('user_id', $id)->get();
            $projects = DB::table('projects')->where('user_id', $id)->get();
            $education = DB::table('education')->where('user_id', $id)->get();
            $personal_infos = DB::table('personal_infos')->where('user_id', $id)->get();
            $references = DB::table('references')->where('user_id', $id)->get();
            $experiences = DB::table('work_exps')->where('user_id', $id)->get();
            $socials = DB::table('social_media')->where('user_id', $id)->get();
            $trainings = DB::table('trainings')->where('user_id', $id)->get();

            return view('templete-11', compact('cv','additonalInfos','projects','education','personal_infos','references','experiences','socials','trainings'));
        }

        elseif($id == 12)
        {
            $cv = DB::table('cvs')->where('id',$id)->get();

            $num = $request->num;
            $id = DB::table('users')->where('mobile', $request->num)->value('id');

            $additonalInfos = DB::table('additonal_infos')->where('user_id', $id)->get();
            $projects = DB::table('projects')->where('user_id', $id)->get();
            $education = DB::table('education')->where('user_id', $id)->get();
            $personal_infos = DB::table('personal_infos')->where('user_id', $id)->get();
            $references = DB::table('references')->where('user_id', $id)->get();
            $experiences = DB::table('work_exps')->where('user_id', $id)->get();
            $socials = DB::table('social_media')->where('user_id', $id)->get();
            $trainings = DB::table('trainings')->where('user_id', $id)->get();

            return view('templete-12', compact('cv','additonalInfos','projects','education','personal_infos','references','experiences','socials','trainings'));
        }

        elseif($id == 13)
        {
            $cv = DB::table('cvs')->where('id',$id)->get();

            $num = $request->num;
            $id = DB::table('users')->where('mobile', $request->num)->value('id');

            $additonalInfos = DB::table('additonal_infos')->where('user_id', $id)->get();
            $projects = DB::table('projects')->where('user_id', $id)->get();
            $education = DB::table('education')->where('user_id', $id)->get();
            $personal_infos = DB::table('personal_infos')->where('user_id', $id)->get();
            $references = DB::table('references')->where('user_id', $id)->get();
            $experiences = DB::table('work_exps')->where('user_id', $id)->get();
            $socials = DB::table('social_media')->where('user_id', $id)->get();
            $trainings = DB::table('trainings')->where('user_id', $id)->get();

            return view('templete-13', compact('cv','additonalInfos','projects','education','personal_infos','references','experiences','socials','trainings'));
        }

        elseif($id == 14)
        {
            $cv = DB::table('cvs')->where('id',$id)->get();

            $num = $request->num;
            $id = DB::table('users')->where('mobile', $request->num)->value('id');

            $additonalInfos = DB::table('additonal_infos')->where('user_id', $id)->get();
            $projects = DB::table('projects')->where('user_id', $id)->get();
            $education = DB::table('education')->where('user_id', $id)->get();
            $personal_infos = DB::table('personal_infos')->where('user_id', $id)->get();
            $references = DB::table('references')->where('user_id', $id)->get();
            $experiences = DB::table('work_exps')->where('user_id', $id)->get();
            $socials = DB::table('social_media')->where('user_id', $id)->get();
            $trainings = DB::table('trainings')->where('user_id', $id)->get();

            return view('templete-14', compact('cv','additonalInfos','projects','education','personal_infos','references','experiences','socials','trainings'));
        }

    }
}
