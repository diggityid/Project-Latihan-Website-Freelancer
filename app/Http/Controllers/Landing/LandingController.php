<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return view('pages.landing.index');
    }

    /**
     * Show the form for creating a new resource
=======
        //
    }

    /**
     * Show the form for creating a new resource.
>>>>>>> bef4937796d024120a229dc14f511e4977bc6d5d
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

    //custom

    public function explore(){

<<<<<<< HEAD
        return view('pages.landing.explore');

=======
>>>>>>> bef4937796d024120a229dc14f511e4977bc6d5d
    }

    public function detail($id){

<<<<<<< HEAD
        return view('pages.landing.detail');

=======
>>>>>>> bef4937796d024120a229dc14f511e4977bc6d5d
    }

    public function booking($id){

    }

    public function detail_booking($id){

    }


}
