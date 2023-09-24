<?php

namespace App\Http\Controllers;

use App\Models\Report;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $pageTitle = 'Laporan Keuangan';
        $reports = Report::all();

        return view('admin.report', compact('pageTitle', 'reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Employee';

        return view('admin.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
        ];

        $validator = Validator::make($request->all(), [
            'rDate' => 'required',
            'rDesc' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $file = $request->file('rPhoto');

        if ($file != null) {
            $Rphoto = $file->getClientOriginalName();

            $file->storeAs('public/images', $Rphoto);
        }

        $report = New Report;
        $report->rdaate = $request->rDate;
        $report->rdesc = $request->rDesc;
        $report->rqty = $request->rQty;

        if ($file != null) {
            $report->rphoto = $Rphoto;
        }

        $report->save();

        Alert::success('Added Successfully', 'Laporan Keuangan Berhasil Ditambahkan.');

        return redirect()->route('reports.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Rincian Laporan';

        $report = Report::find($id);

        return view('admin.show', compact('pageTitle', 'report'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Product Edit';

        $report = Report::find($id);

        return view('admin.edit', compact('pageTitle', 'report'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
        ];

        $validator = Validator::make($request->all(), [
            'rDesc' => 'required',
            'rQty' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // update data sesuai id yang dipilih
        $report = Report::find($id);
        $report->rdaate = $request->rDate;
        $report->rdesc = $request->rDesc;
        $report->rqty = $request->rQty;

        $file = $request->file('rPhoto');

        if ($file != null) {
            if ($report->Rphoto) {
                Storage::delete('public/images/' . $report->Rphoto);
            }
            $Rphoto = $file->getClientOriginalName();

            // Store File
            $file->storeAs('public/images', $Rphoto);
        }

        if ($file != null) {
            $report->rphoto = $Rphoto;
        }

        $report->save();

        Alert::success('Changed Successfully', 'Laporan Keuangan Berhasil Diubah.');

        return redirect()->route('reports.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report = Report::find($id);

        $report->delete();

        // Alert::success('Deleted Successfully', 'Employee Data Deleted Successfully.');

        return redirect()->route('reports.index');
    }
}
