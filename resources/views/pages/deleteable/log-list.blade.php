@extends('layouts.app')

@section('content')
  <div class="card m-auto mt-3 text-center" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Log Aktivitas Aset</h5>
        <p class="card-text">Daftar untuk menampilkan Log aktivitas Aset</p>
    </div>
  </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Waktu Input</th>
            <th>Aset</th>
            <th>User</th>
            <th>Aktivitas</th>
          </tr>
        </thead>
        <tbody> 
            @foreach ($logs as $log)        
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$log->waktu_input}}</td>
                <td>{{$log->aset->nama_aset}}</td>
                <td>{{$log->user->nama_lengkap}}</td>
                <td>{{$log->aktivitas->nama_aktivitas}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection