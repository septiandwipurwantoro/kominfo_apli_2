@extends('layouts.app')

@section('content')
    <div class="card m-auto mt-3 text-center" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Daftar Aset</h5>
            <p class="card-text">Daftar untuk menampilkan Aset</p>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nama Aset</th>
            <th>Diskripsi Aset</th>
            <th>Nominal Aset</th>
            <th>Sumber Aset</th>
            <th>Jumlah Aset</th>
            <th>Tahun saat Terdaftar</th>
          </tr>
        </thead>
        <tbody> 
            @foreach ($logs as $log)        
            <tr>
                <td>{{$loop->iteration}}</td>
                <td><img class="img-fluid" style="width: 18rem;" src="{{ asset('gambar_aset/' . $log->aset->foto) }}" alt=""></td>
                <td>{{$log->aset->nama_aset}}</td>
                <td>{{$log->aset->diskripsi}}</td>
                <td>{{$log->aset->nominal_aset}}</td>
                <td>{{$log->aset->sumber_aset}}</td>
                <td>{{$log->aset->kuantitas}}</td>
                <td>{{$log->aset->tahun}}</td> 
                <td>
                    <a href="{{ route('edit-aset', ['id' => $log->aset->id]) }}" class="btn btn-primary">Edit</a> <br>
                    <a href="#" class="btn btn-danger mt-1">Batalkan</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection