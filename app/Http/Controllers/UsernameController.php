<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Username;

class UsernameController extends Controller
{
    public function index(){
        $username = Username::all();
        return view('username.index',compact('username'));
    }
    public function create()
    {
        return view('username.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Username::create($request->except(['_token','submit']));
        return redirect('/username');
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
        $username = Username::find($id);
        return view('username.edit',compact(['username']));

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
        $username =Username::find($id);
        $username->update($request->except(['_token','submit']));
        return redirect('/username');
    }

    public function destroy($id)
    {
        $username = Username::find($id);
        $username->delete();
        return redirect('/username');
    }

}


