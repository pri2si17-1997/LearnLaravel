<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestAPI extends Model
{
   	public function seedDatabase()
	{
		$testApi = factory(App\TestAPI::class)->make();
	}

	public static function getOnName($name)
	{
		return static::where('name', $name)->get();
	} 

	public static function getOnStatus($status)
	{
		return static::where('status', $status)->get();
	}
}
