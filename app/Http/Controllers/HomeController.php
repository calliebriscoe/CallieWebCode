<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use App\Education;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $home = array( 'website_name' => "Callie Briscoe's Website",
                           'who_am_i' => "I am a life long adventurist and I live for a challenge.",
                           'what_am_i' => "I thrive in quick, ever changing environments.",
                           'where_am_i' => "I am not afraid to think outside the box while I strive for knowledge."
                         );

            $experiences = Experience::all();

            $experiences = $experiences->reverse();

            $educations = Education::all();

            $educations = $educations->reverse();

            $title = 'Contact Me:';

            $main_page = array($home, $experiences, $educations, $title);

            return view('home', compact('home', 'experiences', 'educations', 'title'));

          //  return   Views::make('base')
                    //    ->nest('home', 'home', compact('home'));
                        // ->nest('menu.experience', 'menu.experience', $experiences)
                        // ->nest('menu.education', 'menu.education', $educations)
                        // ->nest('menu.contact', 'menu.contact', $title);
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
