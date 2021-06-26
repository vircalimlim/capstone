<?php

namespace App\Http\Controllers;

use App\Models\ReleaseMed;
use Illuminate\Http\Request;

class ReleaseMedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Release.index');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReleaseMed  $releaseMed
     * @return \Illuminate\Http\Response
     */
    public function show(ReleaseMed $releaseMed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReleaseMed  $releaseMed
     * @return \Illuminate\Http\Response
     */
    public function edit(ReleaseMed $releaseMed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReleaseMed  $releaseMed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReleaseMed $releaseMed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReleaseMed  $releaseMed
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReleaseMed $releaseMed)
    {
        //
    }
}
