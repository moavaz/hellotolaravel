<?php

namespace App\Http\Controllers;


use App\chinakastudent;
use Illuminate\Http\Request;use Illuminate\Support\Facades\App;

class ChinakastudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return chinakastudent::all();
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
     * @param  \App\chinakastudent  $chinakastudent
     * @return \Illuminate\Http\Response
     */
    public function show(chinakastudent $chinakastudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\chinakastudent  $chinakastudent
     * @return \Illuminate\Http\Response
     */
    public function edit(chinakastudent $chinakastudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\chinakastudent  $chinakastudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chinakastudent $chinakastudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\chinakastudent  $chinakastudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(chinakastudent $chinakastudent)
    {
        //
    }
}
