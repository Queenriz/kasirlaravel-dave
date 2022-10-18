@extends('layouts.main')

@section('content')
    <h1>Add new data</h1><hr>
    <form action="{{ route('tambah-data') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID barang</label>
            <input placeholder="ID Barang" name="id_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nama barang</label>
          <input placeholder="Class" name="nama_barang" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input placeholder="harga"  name="harga" type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label class="form-label">Stok</label>
            <input placeholder="stok"  name="stok" type="text" class="form-control" id="exampleInputPassword1">
          </div>
        <button type="submit" name="submit" class="btn btn-success">Create</button>
      </form>

  @endsection

