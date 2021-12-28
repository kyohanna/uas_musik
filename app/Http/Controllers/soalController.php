<?php

namespace App\Http\Controllers;

use App\Models\soal;
use Illuminate\Http\Request;

class soalController extends Controller
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
        return view('createsoal',[

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //codingan di menit 18:38 video ke 2
        $so=new Soal();
        $so->value=$request->input('soal'); //sumpah sorry aku gtw iki betul ta ga

        if($so->save()){
            $quiz=Soal::all();
            return view('home');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function show(soal $soal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function edit(soal $soal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, soal $soal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function destroy(soal $soal)
    {
        //
    }
}
