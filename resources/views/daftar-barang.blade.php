@extends('layouts.app')

@section('content')
@php
$user = \Auth::user();
@endphp

<div class="container" style="background-color: #f9f9eb">
  <h1>Daftar Barang</h1>
  <a href="{{url('barang/tambah')}}" class="btn btn-primary">Tambah Barang</a>
  
  <p>Berikut Daftar Barang !!!</p>
  
  <br>
  <div class="panel panel-primary">
    <div class="panel-heading">
      Daftar Barang
    </div>
    <div class="panel-body">
      <table class="table table-default">
        <thead>
          <tr>
            <td>#</td>

            <td>Kode Barang</td>

            <td>Nama Barang</td>

            <td>Stock</td>

            @if($user->role != 3)
            <td>Harga Jual</td>
            @endif

            @if($user->role != 2 && $user->role !=3 )
            <td>Harga Beli</td>
            @endif

          </tr>
        </thead>
        <tbody>
          <?php $no=1;?>
          <?php foreach ($barang as $row):?>
          {{-- @foreach($barang as $row) --}}
          <tr>
            <td>{{ $no }}</td>
            <td>{{$row->kd_barang }}</td>
            <td>{{ $row->nm_barang }}</td>
            <td>{{ $row->stock }}</td>
            @if($user->role != 3)
            <td>Rp {{ $row->harga_jual? $row->harga_jual : '0' }}</td>
            @endif
            @if($user->role != 2 && $user->role !=3 )
            <td>Rp {{ $row->harga_beli? $row->harga_beli : '0' }}</td>
            @endif
            <td>
              <a href="{{ url('barang/ubah') }}/{{ $row->id }}">Edit</a>
              <a href="{{ url('barang/hapus') }}/{{ $row->id}}">Delete</a>
            </td>
          </tr>
          <?php $no++?>
          {{-- @endforeach --}}
          <?php endforeach?>
        </tbody>
      </table>
          {{ $barang->links()}}
    </div>
  </div>
</div>
@endsection

