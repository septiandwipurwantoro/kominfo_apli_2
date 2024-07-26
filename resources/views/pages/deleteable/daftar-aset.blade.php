@extends('layouts.app')

@section('content')
    <div class="card m-auto mt-3 text-center" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Daftar Aset</h5>
            <p class="card-text">Daftar untuk menampilkan Aset</p>
            <a href="{{route('buat-aset')}}" class="btn btn-primary">Tambah Aset</a>
        </div>
    </div>
    <table class="table table-striped">
        <input class="form-control" id="exampleDataList" placeholder="Type to search...">
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
            @foreach ($aset2x as $aset)        
            <tr>
                <td>{{$loop->iteration}}</td>
                <td><img class="img-fluid" style="width: 18rem;" src="{{ asset('gambar_aset/' . $aset->foto) }}" alt=""></td>
                <td>{{$aset->nama_aset}}</td>
                <td>{{$aset->diskripsi}}</td>
                <td>{{$aset->nominal_aset}}</td>
                <td>{{$aset->sumber_aset}}</td>
                <td>{{$aset->kuantitas}}</td>
                <td>{{$aset->tahun}}</td>
                @if (Auth::user()->is_admin)    
                <td>
                    <a href="{{ route('edit-aset', ['id' => $aset->id]) }}" class="btn btn-primary">Edit</a> <br>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger mt-1" data-bs-toggle="modal" data-bs-target="#modal-{{$aset->id}}">
                        Hapus
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="modal-{{$aset->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah anda yakin?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="{{ route('delete-aset', ['id' => $aset->id]) }}" class="btn btn-danger">Hapus</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $aset2x->links() }}
@endsection