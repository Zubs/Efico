<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;

class PagesController extends Controller
{
    /**
     * Displays the landing page sha
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('static.index');
    }

    /**
     * Display the about page
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('static.about');
    }

    /**
     * Displays the contact page
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('static.contact');
    }

    /**
     * Saves the data from the contact page and returns a thank you page
     *
     * @return \Illuminate\Http\Response
     */
    public function submitContact()
    {
        return view('static.thanks');
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
