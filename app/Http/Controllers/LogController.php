<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Repositories\LogRepositoryInterface;
use App\Log;


class LogController extends BaseController
{
    protected $log;

    public function __construct(LogRepositoryInterface $log) {
        $this->log = $log;
    }

	public function index() {
        $logs = $this->log->getAll();
        return $logs;
    }

    public function store(Request $request) {

        $this->validate($request, [
            'website' => 'required|url',
            'status' => 'required|integer',
            'datetime' => 'required|date',
            'time' => 'required|integer'
        ]);

        $log = new Log();
        $log->website = $request->website;
        $log->status = $request->status;
        $log->datetime = $request->datetime;
        $log->time = $request->time;
        //store the log
        $log->save();
        return response()->json('yeeey');
    }

    public function show($id) {
        $log = $this->log->getById($id);
        return $log;
    }
	
}