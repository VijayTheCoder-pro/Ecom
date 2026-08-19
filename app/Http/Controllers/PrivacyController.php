<?php

namespace App\Http\Controllers;

use App\Models\privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('privacy');
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
     * @param  \App\Models\privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function show(privacy $privacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function edit(privacy $privacy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, privacy $privacy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function destroy(privacy $privacy)
    {
        //
    }
}
