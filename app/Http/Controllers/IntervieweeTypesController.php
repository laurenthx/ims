<?php

namespace App\Http\Controllers;

use App\Models\interviewee_types;
use App\Http\Requests\Storeinterviewee_typesRequest;
use App\Http\Requests\Updateinterviewee_typesRequest;

class IntervieweeTypesController extends Controller
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
     * @param  \App\Http\Requests\Storeinterviewee_typesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeinterviewee_typesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\interviewee_types  $interviewee_types
     * @return \Illuminate\Http\Response
     */
    public function show(interviewee_types $interviewee_types)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\interviewee_types  $interviewee_types
     * @return \Illuminate\Http\Response
     */
    public function edit(interviewee_types $interviewee_types)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateinterviewee_typesRequest  $request
     * @param  \App\Models\interviewee_types  $interviewee_types
     * @return \Illuminate\Http\Response
     */
    public function update(Updateinterviewee_typesRequest $request, interviewee_types $interviewee_types)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\interviewee_types  $interviewee_types
     * @return \Illuminate\Http\Response
     */
    public function destroy(interviewee_types $interviewee_types)
    {
        //
    }
}
