<?php

namespace App\Http\Controllers;

use App\WorkExperience;
use App\Http\Requests\WorkExperienceRequest;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkExperienceRequest $request)
    {
        $request->merge(['candidate_id' => auth()->user()->candidate->id]);
        $request->merge(['w_from' => date('Y-m-d', strtotime($request['w_from']))]);
        $request->merge(['w_to' => date('Y-m-d', strtotime($request['w_to']))]);
        WorkExperience::create($request->input());
        return back()->with('message', ['status' => 'success', 'message' => "Experiencia de trabajo guardada correctamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkExperience  $workExperience
     * @return \Illuminate\Http\Response
     */
    public function show(WorkExperience $workExperience)
    {
        return response()->json($workExperience, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkExperience  $workExperience
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkExperience $workExperience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkExperience  $workExperience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkExperience $workExperience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkExperience  $workExperience
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkExperience $workExperience)
    {
        $workExperience->delete();
        return back()->with('message', ['status' => 'success', 'message' => "Información de experiencia de trabajo borrada correctamente"]);
    }
}
