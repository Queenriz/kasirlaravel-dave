@extends('layouts.main')

@section('content')
    <h1>Add new data</h1><hr>
    <form action="{{ route('new') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal</label>
            <input placeholder="" name="tgl_trx" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">ID transaksi</label>
          <input placeholder="id transaksi" name="transaksi_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pilih Barang</label>
            <select class="form-select" name="barang_id" aria-label="Default select example">
                <option selected>pilih barang</option>
                <option value="2">Pensil</option>
                <option value="3">Pulpen</option>
                <option value="1">Buku</option>
              </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Jumlah</label>
            <input placeholder="jumlah"  name="jml" type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label class="form-label">TOTAL</label>
            <input placeholder="TOTAL"  name="total_bayar" type="text" class="form-control" id="exampleInputPassword1">
          </div>
        <button type="submit" name="submit" class="btn btn-success">Create</button>
      </form>

  @endsection
