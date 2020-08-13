<?php

namespace App\Http\Controllers;

use App\fakultas;
use DataTables;
use Illuminate\Http\Request;

class fakultascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_fakultas=fakultas::all();
        return view('fakultas.index' , compact('list_fakultas'));
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
     * @param  \App\fakultas  $fakultas
     * @return \Illuminate\Http\Response
     */
    public function show(fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fakultas  $fakultas
     * @return \Illuminate\Http\Response
     */
    public function edit(fakultas $fakultas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fakultas  $fakultas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fakultas $fakultas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fakultas  $fakultas
     * @return \Illuminate\Http\Response
     */
    public function destroy(fakultas $fakultas)
    {
        //
    }
}
