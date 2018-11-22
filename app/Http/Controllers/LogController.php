<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LogService;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Log;


class LogController extends BaseController
{
    //protected $log;

    public function __construct(LogService $logService) {
        $this->logService = $logService;
    }

	public function index() {
        return $this->logService->allLogs();
    }

    public function store(Request $request) {
        //store the log
        //dd($this->validate());
        return $this->logService->store($request);
    }

    public function show($id) {
        return $this->logService->findLogById($id);
    }

   
	
}