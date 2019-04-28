<?php

namespace App\Http\Controllers;

use App\ThankYou;
use Illuminate\Http\Request;

class ThankYouController extends Controller
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
            'sampleRecipient_id' => 'required',
            'Q1' => 'required_without:Q2',
            'Q2' => 'required_without:Q1'
        ]);
        return ThankYou::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ThankYou  $thankYou
     * @return \Illuminate\Http\Response
     */
    public function show(ThankYou $thankYou)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ThankYou  $thankYou
     * @return \Illuminate\Http\Response
     */
    public function edit(ThankYou $thankYou)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ThankYou  $thankYou
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ThankYou $thankYou)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ThankYou  $thankYou
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThankYou $thankYou)
    {
        //
    }
}
