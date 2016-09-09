<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UdfController extends Controller
{
    //
    public function index()
    {
    	return redirect()->to('https://demo_feed.tradingview.com');
    }
}
