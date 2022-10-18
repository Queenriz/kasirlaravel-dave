@extends('layouts.main')

@section('content')
<h1>edit</h1><hr>
    <form action="/barang/{{ $barang->id }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID barang</label>
            <input value="{{ $barang->id_barang }}" name="id_barang" type="text" class="form-control" >
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
          <input value="{{ $barang->nama_barang }}" name="nama_barang" type="text" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Harga</label>
            <input value="{{ $barang->harga }}" name="harga" type="text" class="form-control" >
          </div>
        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input value="{{ $barang->stok}}" name="stok" type="text" class="form-control" id="exampleInputPassword1">
          </div>
        <button type="submit" class="btn btn-success">Create</button>
      </form>

 @endsection
