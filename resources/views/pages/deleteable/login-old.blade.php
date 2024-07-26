@extends('layouts.guest')

@section('content')
    <form action="{{ route('login') }}" method="post" class="m-3">
        @csrf
        @error('gagal_login')
            <span>{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input class="form-control" type="text" aria-label="default input example" name="username">
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <label for="inputPassword5" class="form-label">Password</label>
        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="password">
        @error('password')
            <span>{{ $message }}</span>
        @enderror
        <button class="btn btn-primary mt-3">Login</button>
    </form>
@endsection