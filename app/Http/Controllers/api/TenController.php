<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TenInfo;
use App\Imports\TenDataImport;
use Maatwebsite\Excel\Facades\Excel;

class TenController extends Controller
{
    public function import()
    {
        Excel::import(new TenDataImport(), 'Tennis_Rankings_2019.csv');

        return redirect('/')->with('success', 'All good!');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(TenInfo::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tenInfo = TenInfo::create($request->all());
        return response()->json($tenInfo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(TenInfo::find($id), 200);
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
        $tenInfo = TenInfo::findOrFail($id);
        $tenInfo->update($request->all());
        return response()->json($tenInfo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TenInfo::find($id)->delete();
        return response()->json(null, 204);
    }
}


