@extends('layouts.app')

@section('content')
  <div class="card m-auto mt-3 text-center" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Master User</h5>
        <p class="card-text">Daftar untuk menampilkan User</p>
    </div>
  </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Username</th>
            <th>Nama Lengkap</th>
            <th>Bidang</th>
            <th>Aktif</th> 
          </tr>
        </thead>
        <tbody> 
            @foreach ($users as $user)        
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->nama_lengkap}}</td>
                <td>{{$user->bidang->nama_bidang}}</td>
                <td>{{$user->is_active ? 'Aktif' : 'Tidak Aktif'}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection