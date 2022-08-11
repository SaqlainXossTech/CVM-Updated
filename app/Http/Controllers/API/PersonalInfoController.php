<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PersonalInfoController extends Controller
{

    // $image = $request->image;  // your base64 encoded
    //     $image = str_replace('data:image/png;base64,', '', $image);
    //     $image = str_replace(' ', '+', $image);
    //     $imageName = str_random(10).'.'.'png';
    //     \File::put(storage_path(). '/' . $imageName, base64_decode($image));

    // public function personalInfoImage($image){
	// 	$ext = strtolower($image->getClientOriginalExtension());
	// 	$image_full_name = time().$ext.rand().'.'. $ext;
	// 	$upload_path = 'image/';
	// 	$image_url = $upload_path . $image_full_name;
	// 	$image->move($upload_path, $image_full_name);
	// 	return $image_url;

	// }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal_infos = PersonalInfo::where('user_id',Auth::user()->id)->get();
        return response()->json([
            'success' => true,
            'message' => 'Personal Details',
            'data' => $personal_infos,
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

        $info = new PersonalInfo();
        
        $image = $request->image;  // your base64 encoded
        $target_dir = 'upload/images';

        if(!file_exists($target_dir))
        {
            mkdir($target_dir,0777,true);
        }

        $target_dir = $target_dir."/".rand()."_".time().".jpeg";
        Storage::disk('local')->put($target_dir, base64_decode($image));
        $url = storage_path('https://xosstech.com/cvm/api/storage/app/public/'.$target_dir);
        $new_url = str_replace('/home/xossadmin/public_html/cvm/api/storage/', '', $url);
        $info->image = $new_url;

        // $image = $request->image;  // your base64 encoded
        // $image = str_replace('data:image/png;base64,', '', $image);
        // $image = str_replace(' ', '+', $image);
        // $imageName = Str::random(10) . '.png';
        // Storage::disk('public')->put($imageName, base64_decode($image));
        // $info->image = $image;
        
//         $image = $request->image;
//         $ext = strtolower($image->getClientOriginalExtension());
// 		$image_full_name = time().$ext.rand().'.'. $ext;
// 		$upload_path = storage_path('http://xosstech.com/cvm/api/storage/app/public/image/');
// 		$image_url = $upload_path . $image_full_name;
// 		$image->move($upload_path, $image_full_name);
// 		$info->image = $image_url;

        $info->name = $request->input('name');
        $info->father_name = $request->input('father_name');
        $info->mother_name = $request->input('mother_name');
        //$info->image = $request->input('image');

        //$info->image = $this->personalInfoImage($request->file('image'));
        $info->mobile = $request->input('mobile');
        $info->email = $request->input('email');
        $info->present_address = $request->input('present_address');
        $info->permanent_address = $request->input('permanent_address');
        $info->job_title = $request->input('job_title');
        $info->marital_status = $request->input('marital_status');
        $info->religion = $request->input('religion');
        $info->nationality = $request->input('nationality');
        $info->gender = $request->input('gender');
        $info->dob = $request->input('dob');
        $info->profile_summary = $request->input('profile_summary');
        $info->user_id = Auth::guard('sanctum')->user()->id;
        $info->save();

        return response()->json([
            'success' => true,
			'message' => 'Personal info store successfully',
			'data' => $info,

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

        $infoUpdate = PersonalInfo::find($id);
        
        
        $image = $request->image;  // your base64 encoded
        $target_dir = 'update/images';

        if(!file_exists($target_dir))
        {
            mkdir($target_dir,0777,true);
        }

        $target_dir = $target_dir."/".rand()."_".time().".jpeg";
        Storage::disk('local')->put($target_dir, base64_decode($image));
        $url = storage_path('https://xosstech.com/cvm/api/storage/app/public/'.$target_dir);
        $new_url = str_replace('/home/xossadmin/public_html/cvm/api/storage/', '', $url);
        $infoUpdate->image = $new_url;
        
        
        // $infoUpdate->name = $request->input('name');
        // $infoUpdate->father_name = $request->input('father_name');
        // $infoUpdate->mother_name = $request->input('mother_name');
        // //$infoUpdate->image = $this->personalInfoImage($request->file('image'));
        // $infoUpdate->mobile = $request->input('mobile');
        // $infoUpdate->email = $request->input('email');
        // $infoUpdate->present_address = $request->input('present_address');
        // $infoUpdate->permanent_address = $request->input('permanent_address');
        // $infoUpdate->job_title = $request->input('job_title');
        // $infoUpdate->marital_status = $request->input('marital_status');
        // $infoUpdate->religion = $request->input('religion');
        // $infoUpdate->nationality = $request->input('nationality');
        // $infoUpdate->gender = $request->input('gender');
        // $infoUpdate->dob = $request->input('dob');
        // $infoUpdate->profile_summary = $request->input('profile_summary');
        // $infoUpdate->user_id = Auth::guard('sanctum')->user()->id;

    //     if($request->file != ''){
    //         $path = public_path().'image/';

    //         //code for remove old file
    //         if($infoUpdate->file != ''  && $infoUpdate->file != null){
    //              $file_old = $path.$infoUpdate->file;
    //              unlink($file_old);
    //         }

    //         //upload new file
    //         $file = $request->file;
    //         $filename = $file->getClientOriginalName();
    //         $file->move($path, $filename);

    //         //for update in table
    //         $infoUpdate->update(['file' => $filename]);
    //    }
        
        
        $update = collect($request->all())->except('image')->toArray(); //new
        
        $infoUpdate->update($update);

        return response()->json([
            'success' => true,
			'message' => 'Personal info updated successfully',
			'data' => [
				'Personal info update' => $infoUpdate,
			]

        ], 200);
    }

    public function destroy($id)
    {
        $infoDelete = PersonalInfo::find($id);
        $infoDelete->delete();
        return response()->json([
            'success' => true,
			'message' => 'Personal info deleted successfully',
			'data' => [
				'Personal info delete' => $infoDelete,
			]

        ], 200);
    }
}
