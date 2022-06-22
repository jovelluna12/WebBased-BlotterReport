<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\report;
use Illuminate\Support\Facades\Mail;
use App\Mail\Update;
use Illuminate\Support\Facades\DB;
class WebBlotterControl extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function ViewasAssessor(){
       $report=report::where('status','Unassessed')->get();
       $updatedReports=report::where('status','Updated by User')->get();
        // $report = DB::table('reports')
        //     ->select('*')
        //     ->where('status', '=', 'Unassessed')
        //     ->where('status','=','Updated by User')
        //     ->get();
        //Log::info($report);
        return view('editReports', ['reportlist' => $report,'updated'=>$updatedReports]);   
    }
    public function sendMail(Request $request,$name,$email,$id){

        $update=$request->updateDescription;
    
        DB::table('reports')
            ->select('*')
            ->where('id', '=', $id)
            ->update(['status'=>'Update Requested']);
            

        Mail::to($email."@email.com")
        ->send(new Update($name,$id,$update));
        
        // return redirect('/sendreport');
        return response()->json([
            'message'=>'Update Request Sent to Sender',
            'update message'=>$update
]);
        
    }
    public function redirecttologin(){
        return view('login');
//         return response()->json([
//             'message'=>'Redirect to Login'
// ]);
            
    }
    public function redirecttohome(){
        return view('home');
    }
    public function assessed($id){

        DB::table('reports')
            ->select('*')
            ->where('id', '=', $id)
            ->update(['status'=>'Assessed']);
            
        return redirect('/assess');
    }
    public function reject($id){
        DB::table('reports')
            ->select('*')
            ->where('id', '=', $id)
            ->update(['status'=>'Rejected']);
            
        return redirect('/assess');
    }
}
