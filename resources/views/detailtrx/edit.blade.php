@extends('layouts.main')

@section('content')
    <h1>Add new data</h1><hr>
    <form action="/detailtrx/{{ $detailtrx->id }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal</label>
            <input placeholder="" name="tgl_trx" value="{{ $detailtrx->tgl_trx }}" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">ID transaksi</label>
          <input placeholder="id transaksi" value="{{ $detailtrx->transaksi_id }}" name="transaksi_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pilih Barang</label>
            <select class="form-select" name="barang_id" aria-label="Default select example">
                <option selected>pilih barang</option>
                <option value="2" @if ( $detailtrx->barang_id == "2") selected @endif>Pensil</option>
                <option value="1" @if ( $detailtrx->barang_id == "1") selected @endif>Pulpen</option>
                <option value="3" @if ( $detailtrx->barang_id == "3") selected @endif>Buku</option>
              </select>
        </div>
        <div class="mb-3">
            <label class="form-label">jumlah</label>
            <input placeholder="jumlah" value="{{ $detailtrx->jml }}" name="jml" type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label class="form-label">total</label>
            <input placeholder="total" value="{{ $detailtrx->total_bayar }}" name="total_bayar" type="text" class="form-control" id="exampleInputPassword1">
          </div>
        <button type="submit" name="submit" class="btn btn-success">Create</button>
      </form>

  @endsection
