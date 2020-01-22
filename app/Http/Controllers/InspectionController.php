<?php

namespace App\Http\Controllers;

use App\Inspection;
use App\Organisation;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class InspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inspections = Inspection::with('inspector', 'organisation')->whereOrganisationId(Auth::user()->organisation_id)->get();
        return view("inspection.index", ["inspections" => $inspections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Inspection = new Inspection();
        $Inspection->inspection_date = Carbon::now();
        $Inspection->user_id = Auth::user()->id;
        $Inspection->organisation_id = Auth::user()->organisation_id;
        $Inspection->content = $request->form_content;
        return response()->json(array('status' => $Inspection->save()));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Inspection $inspection
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inspection = Inspection::with( 'organisation')->whereId($id)->first();
        return view('inspection.show',array('inspection'=>$inspection));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Inspection $inspection
     * @return \Illuminate\Http\Response
     */
    public function edit(Inspection $inspection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Inspection $inspection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inspection $inspection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Inspection $inspection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inspection $inspection)
    {
        $inspection->delete();
    }
}
