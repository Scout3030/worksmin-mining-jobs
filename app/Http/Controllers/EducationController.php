<?php

namespace App\Http\Controllers;

use App\Education;
use App\Http\Requests\EducationRequest;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
    public function store(EducationRequest $request)
    {
        $request->merge(['candidate_id' => auth()->user()->candidate->id]);
        $request->merge(['e_from' => date('Y-m-d', strtotime($request['e_from']))]);
        $request->merge(['e_to' => date('Y-m-d', strtotime($request['e_to']))]);
        Education::create($request->input());
        return back()->with('message', ['status' => 'success', 'message' => "Educación guardada correctamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        return response()->json($education, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    // public function edit(Education $education)
    // {
    //     dd(1);
    //     return response()->json($education, 200);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        $request->merge(['degree' => $request['title']]);
        $request->merge(['e_from' => $request['from']]);
        $request->merge(['e_to' => $request['to']]);
        $request->merge(['institution' => $request['organization']]);
        $request->merge(['e_additional_information' => $request['additional']]);
        $input = $request->except(['type', 'title', 'from', 'to', 'organization', 'additional']);

        $education->fill($input)->save();
        return response()->json('Datos actualizados correctamente', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return response()->json('Datos borrados correctamente', 200);
    }
}
