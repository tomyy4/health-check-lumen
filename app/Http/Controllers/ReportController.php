<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Report;

class ReportController extends BaseController
{
    public function index() 
    {
    	$reports = Report::paginate(15);
    	return response()->json($reports);
    }

    //Test on Postman
    public function delete($id) 
    {
        $report = Report::where('id',$id)->first();
        $report->delete();
        return response()->json(' delete successfully');
    }


    public function show($id)
    {
        $report = Report::find($id);
        return response()->json($report);
    }


    public function create(Request $request)
    {
    	$report = Report::create($request->all());
    	return response()->json($report);
    }
}
