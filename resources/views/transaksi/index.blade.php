@extends('layouts.main')

@section('content')
<h1>Tabel Transaksi</h1><hr>
<a href="/transaksi/create" class="btn btn-success">Add</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id transaksi</th>
        <th scope="col">id user</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Jumlah</th>
        <th scope="col">total bayar</th>
        <th scope="col">actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($transaksi as $b)
        <tr>
            <td>{{ $b->id_transaksi }}</td>
            <td>{{ $b->barang->id_barang}}</td>
            <td>{{ $b->barang->nama_barang }}</td>
            <td>{{ $b->jml }}</td>
            {{-- <td>{{ $b->total_bayar }}</td> --}}
            <td>
            <form action="/transaksi/{{ $b->id }}" method="POST">
                <div class="btn">
                    <a href="/transaksi/{{ $b->id }}/edit" class="btn btn-warning">Edit</a>
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger">
                </div>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
