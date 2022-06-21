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
    public function index(Request $request)
    {

        $report = DB::table('reports')
            ->select('*')
            ->where('status', '=', 'Assessed')
            ->get();

        return response()->json($report);
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
        Log::info($request);


        Log::info("also here");
        $id1 = rand(1, getrandmax());
        $id = DB::table('reports')->pluck('id');
        foreach ($id as $id) {
            if ($id1 == $id) {
                $id1 = rand(1, getrandmax());
            }
        }


        $report = new report;
        $report->id = $id1;
        $report->Reporter_id = $request->Reporter_id;
        $report->status = "Unassessed";
        $report->reportdescription = $request->reportDescription;

        $report->photoID_path = $request->file('photo')->store('uploads/id/' . $request->name, 'public');
        $report->save();

        if ($request->hasFile('optionalAttachments')) {

            foreach ($request->file('optionalAttachments') as $file) {

                Log::info('uhh');
                $attach = new multipleAttachments;
                $file_path = $file->store('uploads/OptionalAttachments/' . $request->name, 'public');
                $attach->senderID = $request->Reporter_id;
                $attach->reportid = $id1;
                $attach->attachment = $file_path;
                $attach->save();
            }
        }
        return response()->json([
            'message' => 'Report Posted Successfully'
        ]);
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
        $attachments = DB::table('multiple_attachments')
            ->select('attachment')
            ->where('reportid', '=', $id)
            ->get();

        return view('Viewreport', ['report' => $report, 'attachments' => $attachments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $userid)
    {

        $report = DB::table('reports')
            ->join('users', 'users.id', '=', 'reports.Reporter_id')
            ->select('*')
            ->where('reports.id', '=', $id)
            ->get();



        $attachments = DB::table('multiple_attachments')
            ->select('*')
            ->where('senderId', '=', $userid)
            ->get();

        return view('assessreport', ['report' => $report, 'attachments' => $attachments, 'id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        if ($request->hasFile('photo')) {
            $photoID_path = $request->file('photo')->store('uploads/id/' . $request->name, 'public');
            DB::table('reports')
                ->select('*')
                ->where('id', '=', $id)
                ->update(['photoID_path' => $photoID_path]);
        }
        $reportdescription = $request->reportDescription;
        if (isset($reportdescription)) {
            $id = $request->id;
            DB::table('reports')
                ->select('*')
                ->where('id', '=', $id)
                ->update(['reportdescription' => $request->reportDescription]);
        }
        if ($request->hasFile('optionalAttachments')) {
            $id1 = rand(1, getrandmax());
            $id = DB::table('reports')->pluck('id');
            foreach ($id as $id) {
                if ($id1 == $id) {
                    $id1 = rand(1, getrandmax());
                }
            }
            foreach ($request->file('optionalAttachments') as $file) {

                $attach = new multipleAttachments;
                $file_path = $file->store('uploads/OptionalAttachments/' . $request->name, 'public');
                $attach->senderID = $request->Reporter_id;
                $attach->reportid = $id1;
                $attach->attachment = $file_path;
            }
        }
        DB::table('reports')
            ->select('*')
            ->where('id', '=', $id)
            ->update(['status' => 'Updated by User']);

        return response()->json([
            'message' => 'Report has been Updated'
        ]);
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
