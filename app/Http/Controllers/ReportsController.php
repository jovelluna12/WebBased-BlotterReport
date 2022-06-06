<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\report;
use App\Models\multipleAttachments;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('showReports', ['reportlist' => report::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|mimes:jpg,png,jpeg,bmp|max:2000',
            'optionalAttachments' => 'required|mimes:jpg,png,jpeg,bmp|max:10000',
            'name' => 'required',
            'ContactNumber' => 'required',
            'email_address' => 'required',
            'reportDescription' => 'required'
        ]);


        $id1 = rand(1, getrandmax());
        $id = DB::table('reports')->pluck('id');
        foreach ($id as $id) {
            if ($id1 == $id) {
                $id1 = rand(1, getrandmax());
            }
        }


        $report = new report;
        $report->id = $id1;
        $report->name = $request->name;
        $report->email_address = $request->email_address;
        $report->contact_number = $request->ContactNumber;
        $report->reportdescription = $request->reportDescription;
        $report->photoID_path = $request->photo->store('uploads/id/' . $request->name, 'public');

        $report->save();

        if ($request->hasFile('optionalAttachments')) {
            foreach ($request->file('optionalAttachments') as $file) {
                $attach = new multipleAttachments;
                $file_path = $file->store('uploads/OptionalAttachments/' . $request->name, 'public');
                $attach->senderID = $id1;
                $attach->attachment = $file_path;
                $attach->save();
            }
        }


        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = DB::table('reports')
            ->select('*')
            ->where('id', '=', $id)
            ->get();
        $attachments=DB::table('multiple_attachments')
            ->select('attachment')
            ->where('senderId','=',$id)
            ->get();

            return view('Viewreport', ['report' => $report,'attachments'=>$attachments]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
