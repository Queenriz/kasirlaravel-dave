<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;

class JenisController extends Controller
{
    public function index(){
        $jenis = Jenis::all();
        return view('jenis.index',compact('jenis'));
    }
    public function create()
    {
        return view('jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jenis::create($request->except(['_token','submit']));
        return redirect('/jenis');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis = Jenis::find($id);
        return view('jenis.edit',compact(['jenis']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $jenis =Jenis::find($id);
        $jenis->update($request->except(['_token','submit']));
        return redirect('/jenis');
    }

    public function destroy($id)
    {
        $jenis = Jenis::find($id);
        $jenis->delete();
        return redirect('/jenis');
    }

}
