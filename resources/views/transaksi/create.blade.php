@extends('layouts.main')

@section('content')
    <h1>Add new data</h1><hr>
    <form action="{{ route('create') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID transaksi</label>
            <input name="id_transaksi" type="text" class="form-control" >
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">tgl_trx</label>
          <input name="tgl_trx" type="date" class="form-control" >
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">id_user</label>
          <input name="id_user" type="text" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Jumlah</label>
            <input name="jml" type="text" class="form-control" >
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">total</label>
            <input name="total" type="text" class="form-control" >
          </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">total_bayar</label>
            <input name="total_bayar" type="text" class="form-control" >
          </div>
        <div class="mb-3">
            <label class="form-label">bayar</label>
            <input name="bayar" type="text" class="form-control" id="exampleInputPassword1">
          </div>
        <button type="submit" class="btn btn-success">Create</button>
      </form>
 @endsection
