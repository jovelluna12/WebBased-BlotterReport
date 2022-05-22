<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\report;

class WebBlotterControl extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function showReports(){
        return view('showReports',['reportlist'=>report::all()]);
    }
    public function submit(Request $request){
        $report=new report;
        $report->name=$request->name;
        $report->email_address=$request->email_address;
        $report->contact_number=$request->Contact_Number;
        $report->reportdescription=$request->reportDescription;
        $report->save();
        Log::info($request->all());
        return redirect('/');
    }

}
