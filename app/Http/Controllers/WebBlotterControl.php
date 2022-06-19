<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\report;
use Illuminate\Support\Facades\Mail;
use App\Mail\Update;

class WebBlotterControl extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function ViewasAssessor(){
        return view('editReports', ['reportlist' => report::all()]);   
    }
    public function sendMail($name,$email){
        Log::info($name);
        Log::info($email);
        Mail::to($email."@email.com")
        ->send(new Update($name));
        
        return redirect('/sendreport');
        
    }
    public function redirecttologin(){
        return response()->json([
            'message'=>'Unauthenticated'
]);
    }
}
