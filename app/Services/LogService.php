<?php

namespace App\Services;
use Validator;
use Illuminate\Http\Request;
use App\Repositories\DbLogRepository;
use App\Log;

class LogService {

	/*
	LACKS OUTPUTTER CLASS
	*/
	public function __construct(DbLogRepository $log) {
		$this->log = $log;

	}

	public function allLogs() {
		return response()->json($this->log->getAll());
	}

	public function store(Request $request) {
		$validator = Validator::make($request->all(), [
             'website' => 'required|url',
             'status' => 'required|integer',
             'datetime' => 'required|date',
             'time' => 'required|integer'
        ]);
        
        //store the log
      
        $this->log->storeLog($request->all());
  		return response()->json('Created succesfully');
	}

	public function findLogById($id) {
		return response()->json($this->log->getById($id));
	}
}