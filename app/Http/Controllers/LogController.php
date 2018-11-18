<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Log;

class LogController extends BaseController
{

	public function index() {
		$logs = Log::all()->paginate(10);
		return response()->json($logs);
	}

}