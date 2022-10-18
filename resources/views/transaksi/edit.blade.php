@extends('layouts.main')

@section('content')
<div class="container"><br>
    <h1>edit</h1><hr>
    <form action="/transaksi/{{ $transaksi->id }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID transaksi</label>
            <input value="{{ $transaksi->id_transaksi }}" name="id_transaksi" type="text" class="form-control" >
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">tgl_trx</label>
          <input value="{{ $transaksi->tgl_trx }}" name="tgl_trx" type="text" class="form-control" >
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">id_user</label>
          <input value="{{ $transaksi->id_user }}" name="id_user" type="text" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">total_bayar</label>
            <input value="{{ $transaksi->total_bayar }}" name="total_bayar" type="text" class="form-control" >
          </div>
        <div class="mb-3">
            <label class="form-label">bayar</label>
            <input value="{{ $transaksi->bayar}}" name="bayar" type="text" class="form-control" id="exampleInputPassword1">
          </div>
        <button type="submit" class="btn btn-success">Create</button>
      </form>
    </div>
 @endsection
