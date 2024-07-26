@extends('layouts.app')

@section('content')
<form action="{{ route('update-aset', ['id' => $aset->id]) }}" method="post" class="m-3" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="formFile" class="form-label">Masukan Gambar</label>
        <input class="form-control" type="file" id="formFile" name="image">
        @error('image')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Aset</label>
      <input class="form-control" type="text" aria-label="default input example" name="nama" value="{{ $aset->nama_aset }}">
      @error('nama')
          <span>{{ $message }}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label" name="diskripsi">Diskripsi Aset</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="diskripsi">{{ $aset->diskripsi }}</textarea>
      @error('diskripsi')
          <span>{{ $message }}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nominal Aset</label>
      <input class="form-control" type="text" aria-label="default input example" name="nominal" value="{{ $aset->nominal_aset }}">
      @error('nominal')
          <span>{{ $message }}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Sumber Aset</label>
      <input class="form-control" type="text" aria-label="default input example" name="sumber" value="{{ $aset->sumber_aset }}">
      @error('sumber')
          <span>{{ $message }}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Kuantitas</label>
      <input class="form-control" type="text" aria-label="default input example" name="kuantitas" value="{{ $aset->kuantitas }}">
      @error('kuantitas')
          <span>{{ $message }}</span>
      @enderror
    </div>
    <button class="btn btn-primary">Perbarui</button>
</form>
@endsection