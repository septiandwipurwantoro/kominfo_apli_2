@extends('layouts.app')

@section('content')
<form action="{{ route('simpan-aset') }}" method="post" class="m-3" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="formFile" class="form-label">Masukan Gambar</label>
        <input class="form-control" type="file" id="formFile" name="image">
        @error('image')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Aset</label>
      <input class="form-control" type="text" aria-label="default input example" name="nama">
      @error('nama')
          <span>{{ $message }}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label" name="diskripsi">Diskripsi Aset</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="diskripsi"></textarea>
      @error('diskripsi')
          <span>{{ $message }}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nominal Aset</label>
      <input class="form-control" type="text" aria-label="default input example" name="nominal">
      @error('nominal')
          <span>{{ $message }}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Sumber Aset</label>
      <input class="form-control" type="text" aria-label="default input example" name="sumber">
      @error('sumber')
          <span>{{ $message }}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Kuantitas</label>
      <input class="form-control" type="text" aria-label="default input example" name="kuantitas">
      @error('kuantitas')
          <span>{{ $message }}</span>
      @enderror
    </div>
    <button class="btn btn-primary">Simpam</button>
</form>
@endsection