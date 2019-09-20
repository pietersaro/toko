@extends('layouts.app')

@section('content')


<div class="container" style="background-color: #f9f9eb">
  <h1>Daftar User</h1>
  <a href="{{url('user/tambah')}}" class="btn btn-primary">Tambah Barang</a>

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
            <td>Name</td>
            <td>Email</td>
            <td>Role</td>
            <td>Action</td>
          </tr>
        </thead>
        <tbody>
          <?php $no=1;?>
          <?php foreach ($user as $row):?>
          {{-- @foreach($user as $row) --}}
          <tr>
            <td>{{ $no }}</td>
            <td>{{$row->name }}</td>
            <td>{{ $row->email }}</td>
            <td></td>
            <td>
              <a href="{{ url('user/ubah') }}/{{ $row->id }}">Edit</a>
              <a href="{{ url('user/hapus') }}/{{ $row->id}}">Delete</a>
            </td>
          </tr>
          <?php $no++?>
          {{-- @endforeach --}}
          <?php endforeach?>
        </tbody>
      </table>
      {{ $user->links()}}
    </div>
  </div>
</div>
@endsection

