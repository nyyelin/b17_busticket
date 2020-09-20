<?php

namespace App\Http\Controllers;

use App\Travllerinfo;
use Illuminate\Http\Request;

class TravellerInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travellers=Travllerinfo::all();


        return view('backend.travellerinfos.index',compact('travellers'));


        //return view('backend.travellerinfos.travellerinfolist',compact('travellerinfos'));

        // return view('backend.travellerinfos.index');


        return view('backend.travellerinfos.travellerinfolist',compact('travellerinfos'));
}

        // return view('backend.travellerinfos.index');

     


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
     * @param  \App\Travllerinfo  $travellerInfo
     * @return \Illuminate\Http\Response
     */
    public function show(Travllerinfo $travellerInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Travllerinfo  $travellerInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Travllerinfo $travellerInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Travllerinfo  $travellerInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travllerinfo $travellerInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Travllerinfo  $travellerInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travllerinfo $travellerInfo)
    {
        //
    }
}
