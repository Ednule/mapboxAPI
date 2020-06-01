<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pin;

class PinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pins = Pin::all();

        return response()->json($pins,200);
    }

    public function losCabos()
    {
        $pins = Pin::where('municipality_id',1)->get();

        return response()->json($pins,200);
    }

    public function laPaz()
    {
        $pins = Pin::where('municipality_id',2)->get();

        return response()->json($pins,200);
    }

    public function loreto()
    {
        $pins = Pin::where('municipality_id',3)->get();

        return response()->json($pins,200);
    }

    public function comondu()
    {
        $pins = Pin::where('municipality_id',4)->get();

        return response()->json($pins,200);
    }

    public function mulege()
    {
        $pins = Pin::where('municipality_id',5)->get();

        return response()->json($pins,200);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
