<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Job;
use App\Models\Admin;
use App\Models\User;
use App\Models\Payment;
use App\Models\Project;
use App\Models\WorkExp;
use App\Models\Training;
use App\Models\Education;
use App\Models\Reference;
use App\Models\Suggetion;
use App\Models\PersonalInfo;
use App\Models\AdditonalInfo;
use App\Models\InterviewTips;
use App\Exports\UsersExport;
use App\Exports\PaymentsExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
session_start();

class AdminController extends Controller
{
    //Admin Authentication......................

    public function AdminAuthCheck()
    {
        $admin_id = Session::get('admin_id');

        if($admin_id)
        {
            return;
        }
        else{
            return Redirect::to('/admin')->send();
        }
    }

    public function adminLogin()
    {
        return view('admin.auth.login');
    }

    public function adminLogout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('admin/login');
    }

    public function adminLoginAuth(Request $request)
    {
        $admin_username=$request->username;
        $admin_password=$request->password;

        $data=DB::table('admins')
                ->where('username', $admin_username)
                ->where('password', $admin_password)
                ->first();

            if($data)
            {
                Session::put('username', $data->username);
                Session::put('admin_id', $data->id);

                return Redirect::to('/admin/dashboard');
                // return view('admin.dashboard');
            }

            else{
                Session::put('message', 'Email or Password Invalid');
                return Redirect::to('/admin');
            }
    }

    //Admin Authentication......................

    //Dashboard.................................

    public function dashboard()
    {
        $this->AdminAuthCheck();
        return view('admin.dashboard');
    }

    //Dashboard.................................

    //Views.....................................

    public function allAdmin()
    {
        $this->AdminAuthCheck();
        $allAdmins=Admin::latest()->get();

        return view('admin.admins', compact('allAdmins'));
    }

    public function allUser()
    {
        $this->AdminAuthCheck();
        $allUsers=User::latest()->paginate(100);
        $totalUsers=User::count() - 19;

        return view('admin.users', compact('allUsers','totalUsers'));
    }

    public function personalInfo()
    {
        $this->AdminAuthCheck();
        $personalInfos=PersonalInfo::latest()->paginate(100);

        return view('admin.personalInfo', compact('personalInfos'));
    }

    public function payments()
    {
        $this->AdminAuthCheck();
        $payments=Payment::latest()->paginate(100);

        $total_payment = Payment::sum('amount');

        return view('admin.payments', compact('payments','total_payment'));
    }

    public function additionalInfo()
    {
        $this->AdminAuthCheck();
        $infos=AdditonalInfo::latest()->paginate(100);

        return view('admin.additionalInfo', compact('infos'));
    }

    public function educations()
    {
        $this->AdminAuthCheck();
        $educations=Education::latest()->paginate(100);

        return view('admin.educations', compact('educations'));
    }

    public function projects()
    {
        $this->AdminAuthCheck();
        $projects=Project::latest()->paginate(100);

        return view('admin.projects', compact('projects'));
    }

    public function references()
    {
        $this->AdminAuthCheck();
        $references=Reference::latest()->paginate(100);

        return view('admin.references', compact('references'));
    }

    public function trainings()
    {
        $this->AdminAuthCheck();
        $trainings=Training::latest()->paginate(100);

        return view('admin.trainings', compact('trainings'));
    }

    public function experiences()
    {
        $this->AdminAuthCheck();
        $experiences=WorkExp::latest()->paginate(100);

        return view('admin.experiences', compact('experiences'));
    }

    //Views.............................................

    //Interview Tips....................................

    public function index_tips()
    {
        $this->AdminAuthCheck();
        return view('admin.add-tips');
    }

    public function all_tips()
    {
        $this->AdminAuthCheck();
        $all_interview_tips=InterviewTips::latest()->paginate(100);

        return view('admin.all-tips', compact('all_interview_tips'));
    }

    public function save_tips(Request $request)
    {
        $this->AdminAuthCheck();
        $add_tips = new InterviewTips();

        $add_tips->tips = $request->input('tips');
        $add_tips->save();

        Session::put('message','Added Successfully!!');
        return Redirect::to('/admin/add-tips');
    }

    public function edit_tips($id)
    {
        $this->AdminAuthCheck();
        $edit_tips = InterviewTips::where('id',$id)->first();
        return view('admin.edit-tips', compact('edit_tips'));
    }

    public function update_tips(Request $request, $id)
    {
        $this->AdminAuthCheck();
        $update_tips = InterviewTips::find($id);
        $update_tips->update($request->all());

        Session::put('message','Update Successfully!!');
        return Redirect::to('/admin/all-tips');
    }

    public function delete_tips($id)
    {
        $this->AdminAuthCheck();
        InterviewTips::where('id',$id)->delete();

        Session::put('message','Deleted Successfully!!');
        return Redirect::to('/admin/all-tips');
    }

    //Interview Tips....................................

    //Suggetions....................................

    public function index_suggetions()
    {
        $this->AdminAuthCheck();
        return view('admin.add-suggetions');
    }

    public function all_suggetions()
    {
        $this->AdminAuthCheck();
        $all_suggetions=Suggetion::latest()->paginate(100);

        return view('admin.all-suggetions', compact('all_suggetions'));
    }

    public function save_suggetions(Request $request)
    {
        $this->AdminAuthCheck();
        $add_suggetions = new Suggetion();

        $add_suggetions->inst_name = $request->input('inst_name');
        $add_suggetions->dept = $request->input('dept');
        $add_suggetions->skill = $request->input('skill');
        $add_suggetions->present_address = $request->input('present_address');
        $add_suggetions->profile_summary = $request->input('profile_summary');
        $add_suggetions->save();

        Session::put('message','Added Successfully!!');
        return Redirect::to('/admin/add-suggetions');
    }

    public function edit_suggetions($id)
    {
        $this->AdminAuthCheck();
        $edit_suggetions = Suggetion::where('id',$id)->first();
        return view('admin.edit-suggetions', compact('edit_suggetions'));
    }

    public function update_suggetions(Request $request, $id)
    {
        $this->AdminAuthCheck();
        $update_suggetions = Suggetion::find($id);
        $update_suggetions->update($request->all());

        Session::put('message','Update Successfully!!');
        return Redirect::to('/admin/all-suggetions');
    }

    public function delete_suggetions($id)
    {
        $this->AdminAuthCheck();
        Suggetion::where('id',$id)->delete();

        Session::put('message','Deleted Successfully!!');
        return Redirect::to('/admin/all-suggetions');
    }

    //Suggetions....................................

    //Job Circular....................................

    public function index_jobs()
    {
        $this->AdminAuthCheck();
        return view('admin.add-jobs');
    }

    public function all_jobs()
    {
        $this->AdminAuthCheck();
        $all_jobs=Job::latest()->paginate(100);

        return view('admin.all-jobs', compact('all_jobs'));
    }

    public function save_jobs(Request $request)
    {
        $this->AdminAuthCheck();
        $add_jobs = new Job();

        $add_jobs->job_title = $request->input('job_title');
        $add_jobs->company_name = $request->input('company_name');
        $add_jobs->category = 'Govt.';
        $add_jobs->location = '';
        $add_jobs->apply_link = $request->input('apply_link');
        $add_jobs->end_date = $request->input('end_date');
        $add_jobs->save();

        $pdf_file = $request->file('pdf');
        if($pdf_file)
        {
            $name = $add_jobs->id.'CVM'.'.'.$pdf_file->extension();
            $pdf_file->move(base_path() . '/storage/app/public/pdf/', $name);
            $pdf_url = base_path('https://xosstech.com/cvm/api/storage/app/public/pdf/'.$name);
            $add_jobs->pdf_link = $pdf_url;
        }
        $add_jobs->save();

        Session::put('message','Added Successfully!!');
        return Redirect::to('/admin/add-jobs');
    }

    public function edit_jobs($id)
    {
        $this->AdminAuthCheck();
        $edit_jobs = Job::where('id',$id)->first();
        return view('admin.edit-jobs', compact('edit_jobs'));
    }

    public function update_jobs(Request $request, $id)
    {
        $this->AdminAuthCheck();
        $update_jobs = Job::find($id);

        $pdf_file = $request->file('pdf');
        if($pdf_file)
        {
            $name = $update_jobs->id.'CVM'.'.'.$pdf_file->extension();
            unlink($update_jobs->pdf_link);
            $pdf_file->move(base_path() . '/storage/app/public/pdf/', $name);
            $pdf_url = base_path('https://xosstech.com/cvm/api/storage/app/public/pdf/'.$name);
            $update_jobs->pdf_link = $pdf_url;
        }

        $update = collect($request->all())->except('pdf')->toArray();
        $update_jobs->update($update);

        Session::put('message','Update Successfully!!');
        return Redirect::to('/admin/all-jobs');
    }

    public function delete_jobs($id)
    {
        $this->AdminAuthCheck();
        $delete_job = Job::find($id);
        unlink($delete_job->pdf_link);
        $delete_job = Job::where('id',$id)->delete();

        Session::put('message','Deleted Successfully!!');
        return Redirect::to('/admin/all-jobs');
    }

    //Job Circular....................................

    //Searching and Filtering...........................

    public function search(Request $request)
    {
        $this->AdminAuthCheck();
        if($request->user)
        {
            $totalUsers=User::count() - 17;
            $allUsers = User::orderBy('id','desc')
                            ->where('id', $request->user)
                            ->orwhere('name', 'LIKE', '%'. $request->user. '%')
                            ->orWhere('mobile', 'LIKE', '%'. $request->user. '%')
                            ->paginate(100)->withQueryString();

            return view('admin.users', compact('allUsers','totalUsers'));
        }

        if($request->personal_info)
        {
            $personalInfos = PersonalInfo::orderBy('id','desc')
                                        ->where('user_id', $request->personal_info)
                                        ->orWhere('name', 'LIKE', '%'. $request->personal_info. '%')
                                        ->orWhere('mobile', 'LIKE', '%'. $request->personal_info. '%')
                                        ->orWhere('father_name', 'LIKE', '%'. $request->personal_info. '%')
                                        ->orWhere('mother_name', 'LIKE', '%'. $request->personal_info. '%')
                                        ->orWhere('email', 'LIKE', '%'. $request->personal_info. '%')
                                        ->orWhere('present_address', 'LIKE', '%'. $request->personal_info. '%')
                                        ->orWhere('permanent_address', 'LIKE', '%'. $request->personal_info. '%')
                                        ->orWhere('job_title', 'LIKE', '%'. $request->personal_info. '%')
                                        ->orWhere('marital_status', 'LIKE', '%'. $request->personal_info. '%')
                                        ->orWhere('religion', 'LIKE', '%'. $request->personal_info. '%')
                                        ->orWhere('nationality', 'LIKE', '%'. $request->personal_info. '%')
                                        ->orWhere('gender', 'LIKE', '%'. $request->personal_info. '%')
                                        ->paginate(100)->withQueryString();

            return view('admin.personalInfo', compact('personalInfos'));
        }

        if($request->payment)
        {
            $payments = Payment::orderBy('id','desc')
                                ->where('user_id', $request->payment)
                                ->orWhere('order_id', 'LIKE', '%'. $request->payment. '%')
                                ->orWhere('txid', 'LIKE', '%'. $request->payment. '%')
                                ->orWhere('type', 'LIKE', '%'. $request->payment. '%')
                                ->paginate(100)->withQueryString();

            $total_payment = Payment::sum('amount');

            return view('admin.payments', compact('payments','total_payment'));
        }

        if($request->additional_info)
        {
            $infos = AdditonalInfo::orderBy('id','desc')
                                        ->where('user_id', $request->additional_info)
                                        ->orWhere('skills', 'LIKE', '%'. $request->additional_info. '%')
                                        ->orWhere('hobby', 'LIKE', '%'. $request->additional_info. '%')
                                        ->orWhere('language', 'LIKE', '%'. $request->additional_info. '%')
                                        ->paginate(100)->withQueryString();

            return view('admin.additionalInfo', compact('infos'));
        }

        if($request->education)
        {
            $educations = Education::orderBy('id','desc')
                                    ->where('user_id', $request->education)
                                    ->orWhere('inst_name', 'LIKE', '%'. $request->education. '%')
                                    ->orWhere('degree', 'LIKE', '%'. $request->education. '%')
                                    ->orWhere('dept', 'LIKE', '%'. $request->education. '%')
                                    ->orWhere('pass_year', 'LIKE', '%'. $request->education. '%')
                                    ->orWhere('result', 'LIKE', '%'. $request->education. '%')
                                    ->orWhere('board', 'LIKE', '%'. $request->education. '%')
                                    ->paginate(100)->withQueryString();

            return view('admin.educations', compact('educations'));
        }

        if($request->project)
        {
            $projects = Project::orderBy('id','desc')
                            ->where('user_id', $request->project)
                            ->paginate(100)->withQueryString();

            return view('admin.projects', compact('projects'));
        }

        if($request->reference)
        {
            $references = Reference::orderBy('id','desc')
                            ->where('user_id', $request->reference)
                            ->paginate(100)->withQueryString();

            return view('admin.references', compact('references'));
        }

        if($request->training)
        {
            $trainings = Training::orderBy('id','desc')
                            ->where('user_id', $request->training)
                            ->paginate(100)->withQueryString();

            return view('admin.trainings', compact('trainings'));
        }

        if($request->experience)
        {
            $experiences = WorkExp::orderBy('id','desc')
                            ->where('user_id', $request->experience)
                            ->paginate(100)->withQueryString();

            return view('admin.experiences', compact('experiences'));
        }
    }

    //Searching and Filtering...........................

    //PDF & Excel Report Generation.............................

    public function userReportPDF()
    {
        $this->AdminAuthCheck();
        $data = [
            'allUsers' => User::latest()->paginate(100),
            'totalUsers' => User::count() - 19,
            'date' => date('d/m/Y')
        ];

        $pdf = PDF::loadView('admin.userReportPDF', $data)->setPaper('a4');

        return $pdf->download('CVM User Report.pdf');
    }

    public function paymentReportPDF()
    {
        $this->AdminAuthCheck();
        $data = [
            'payments' => Payment::latest()->paginate(100),
            'total_payment' => Payment::sum('amount'),
            'date' => date('d/m/Y')
        ];

        $pdf = PDF::loadView('admin.paymentReportPDF', $data)->setPaper('a4');

        return $pdf->download('CVM Payment Report.pdf');
    }

    public function userReportExcel()
    {
        $this->AdminAuthCheck();
        return Excel::download(new UsersExport, 'CVM User Report.xlsx');
    }

    public function paymentReportExcel()
    {
        $this->AdminAuthCheck();
        return Excel::download(new PaymentsExport, 'CVM Payment Report.xlsx');
    }

    //PDF & Excel Report Generation.............................
}
