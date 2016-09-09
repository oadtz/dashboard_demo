<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{

	public function dashboard1()
	{
    	return view('site.dashboard1');
	}

	public function dashboard2()
	{
    	return view('site.dashboard2');
	}

	public function tradingview()
	{
		return view('site.tradingview');
	}
	
}
