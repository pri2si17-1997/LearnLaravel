<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TestAPI;

class APIController extends Controller
{
	public function index()
	{
		$resultSet = TestAPI::all();
		return $resultSet;
	}

	/*public function fetchByName($name)
	{
		$resultSet = TestAPI::getOnName($name);
		return $resultSet;
	}

	public function fetchByStaus($status)
	{
		$resultSet = TestAPI::getOnStatus($status);
		return $resultSet;
	}*/
	
	public function fetchRecord($parameter)
	{
		if(is_numeric($parameter))
		{
			return TestAPI::getOnStatus($parameter);
		}
		else
		{
			return TestAPI::getOnName($parameter);
		}
	}
}
