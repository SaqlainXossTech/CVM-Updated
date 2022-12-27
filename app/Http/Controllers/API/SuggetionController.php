<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PersonalInfo;
use App\Models\Suggetion;

class SuggetionController extends Controller
{
    public function index($data)
    {
        if($data === 'inst_name'){

            $inst_name = Suggetion::orderBy('inst_name')->get('inst_name');

            return response()->json($inst_name,200);
        }
        else if($data === 'dept'){

            $dept = Suggetion::orderBy('dept')->get('dept');

            return response()->json($dept,200);
        }
        else if($data === 'skill'){

            $skill = Suggetion::orderBy('skill')->get('skill');

            return response()->json($skill,200);
        }
        else if($data === 'summary'){

            $summary = Suggetion::orderBy('profile_summary')->get('profile_summary');

            return response()->json($summary,200);
        }
        else if($data === 'location'){

            $location1 = Suggetion::orderBy('present_address')->get('present_address');
            $location2 = PersonalInfo::orderBy('present_address')->get('present_address');

            $location = $location1->concat($location2);

            return response()->json($location,200);
        }

    }
}
