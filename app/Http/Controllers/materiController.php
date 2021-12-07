<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materi;

class materiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materi=materi::all();
        return view("materi",[
            'materis'=>$materi,
            'title'=>'Materi'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("createmateri",[

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
        materi::create([
            'kategori'=>$request->kategori,
            'materi'=>$request->materi
            //'image'=>$request->image
        ]);
        return redirect(route('materi.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view("show", [
        //     'title'=>'Materi',
        //     'materi'=>materi::where('materi_id',$id)->get()->first()
        // ]);
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
        $materi=materi::findOrFail($id);
        $materi->update([
            'kategori'=>$request->kategori,
            'materi'=>$request->materi,
            //'image'=>$request->image
        ]);
        return redirect(route('mobil.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materi=materi::findOrFail($id);
        $materi->delete();
        return redirect(route('materi.index'));
    }
}
