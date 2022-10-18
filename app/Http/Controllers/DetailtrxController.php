<?php

namespace App\Http\Controllers;

use App\Models\Detailtrx;
use App\Models\Transaksi;

use Illuminate\Http\Request;

class DetailtrxController extends Controller
{
    public function index(){
        $detailtrx = Detailtrx::with('transaksi','barang')->latest()->paginate(2);
        return view('detailtrx.index',compact('detailtrx'));
    }
    public function create()
    {
        return view('detailtrx.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Detailtrx::create($request->except(['_token','submit']));
        return redirect('/detailtrx');
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
        $detailtrx = Detailtrx::find($id);
        return view('detailtrx.edit',compact(['detailtrx']));

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
        $detailtrx =Detailtrx::find($id);
        $detailtrx->update($request->except(['_token','submit']));
        return redirect('/detailtrx');
    }

    public function destroy($id)
    {
        $detailtrx = Detailtrx::find($id);
        $detailtrx->delete();
        return redirect('/detailtrx');
    }

}
