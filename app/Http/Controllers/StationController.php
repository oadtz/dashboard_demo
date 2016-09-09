<?php

namespace App\Http\Controllers;

use App\Station;
use Illuminate\Http\Request;
use App\Http\Requests;

class StationController extends Controller
{
    //

	public function index()
	{
		return Station::orderBy('iataCode', 'asc')->get();
	}

	public function symbol(Request $request)
	{
		$station = $request->input('symbol');
		$result = [];

		if (!$station = Station::where('iataCode', strtoupper($station))->first()) {
			$result = [
				'errmsg'=>"unknown_symbol ".$request->input('symbol'),
				's'=>"error"
			];
		} else {

			$result = [
				'name'		=>	$station->iataCode,
				'ticker'	=>	$station->iataCode
			];
		}

		return response()->json($result)->header('Content-Type', 'plain/text');
	}

	public function search(Request $request)
	{
		$query = $request->input('query');
		$limit = intval($request->input('limit'));
		$result = [];

		foreach (Station::where('iataCode', 'like', $query . '%')->take($limit)->orderBy('iataCode', 'asc')->get() as $station) {
			$result[] = [
				"symbol"	=>	$station->iataCode,
        		"full_name" =>	$station->name,
        		"description" =>	$station->name,
        		"exchange"	=>	'station',
        		"ticker"	=>	$station->iataCode,
        		"type"		=> 'station'
			];
		}

		return response()->json($result)->header('Content-Type', 'plain/text');
	}

}
