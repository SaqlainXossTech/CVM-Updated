<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $path = storage_path('app/public/image/');
        $cv = DB::table('cvs')->get();
        return response()->json([
            'success' => true,
            'message' => 'Cv dtails',
            'image path' => $path,
            'cv' => $cv,
        

        ], 200);

    // if (!File::exists($path)) {
    //     abort(404);
    // }

    // $file = File::get($path);
    // $type = File::mimeType($path);

    //$response = Response::make($file, 200);

    //$response->header("Content-Type", $type);


    }
}
