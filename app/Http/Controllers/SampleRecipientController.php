<?php

namespace App\Http\Controllers;

use App\SampleRecipient;
use Illuminate\Http\Request;

class SampleRecipientController extends Controller
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
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
            'fullName' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'cb1' => 'required|in:true,false',
            'cb2' => 'sometimes|in:true,false',
            'cb3' => 'sometimes|in:true,false',
        ]);

        return response()->json(SampleRecipient::create($request->all()));
//        return response()->json($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SampleRecipient  $sampleRecipient
     * @return \Illuminate\Http\Response
     */
    public function show(SampleRecipient $sampleRecipient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SampleRecipient  $sampleRecipient
     * @return \Illuminate\Http\Response
     */
    public function edit(SampleRecipient $sampleRecipient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SampleRecipient  $sampleRecipient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SampleRecipient $sampleRecipient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SampleRecipient  $sampleRecipient
     * @return \Illuminate\Http\Response
     */
    public function destroy(SampleRecipient $sampleRecipient)
    {
        //
    }
}
