<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConfigController extends Controller
{
    //
    public function time()
    {
    	$time = time();

    	return response()->json($time)->header('Content-Type', 'plain/text');
    }

    public function config()
    {
    	$config = [  
		   "supports_search"=>true,
		   "supports_group_request"=>false,
		   "supports_marks"=>true,
		   "supports_timescale_marks"=>true,
		   "supports_time"=>true,
		   "exchanges"=>[  
		      [
		         "value"=>"station",
		         "name"=>"Station",
		         "desc"=>"Station"
		      ]
		   ],
		   "symbolsTypes"=>[
		      [
		         "name"=>"Station",
		         "value"=>"station"
		      ]
		   ],
		   "supportedResolutions"=>[  
		      "D",
		      "2D",
		      "3D",
		      "W",
		      "3W",
		      "M",
		      "6M"
		   ]
		];

    	return response()->json($config)->header('Content-Type', 'plain/text');
    }
}
