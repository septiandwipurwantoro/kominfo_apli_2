@push('styles')
    <!-- dropdown Select -->
    <link
      href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
      rel="stylesheet"
    />
    @vite('resources/css/create-user.css')
@endpush

@push('scripts')
    <!-- dropdown search -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @vite('resources/js/create-user.js')
@endpush

@extends('layouts.app')

@section('content')
    <div class="flex gap-9">
      <section class="back-sidebar w-72 hidden xl:block"></section>

      <section
        class="main-content flex-auto mt-12 px-2 xl:w-3/4 xl:ml-auto xl:pr-4"
      >
        <h1 class="text-gray-500 mb-4">
          <ol class="flex items-center whitespace-nowrap">
            <li class="inline-flex items-center">
              <a
                class="flex items-center text-[24px] text-gray-500 hover:text-indigo-600 focus:outline-none focus:text-indigo-600"
                href="#"
              >
                Edit User
              </a>
            </li>
          </ol>
        </h1>

        <div class="mx-w-7xl bg-white p-5 rounded-lg bg-shadow">
            <form action="{{ route('update-user', ['id' => $user->id]) }}" method="post" class="m-3" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="grid gap-6 mb-6 md:grid-cols-2 overflow-hidden">
              <div>
                <label
                  for="name"
                  class="block mb-2 text-sm font-medium text-gray-600"
                  >Nama</label
                >
                <input
                  type="text"
                  id="name"
                  name="nama"
                  class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-indigo-500 focus:border-blue-500 block w-full p-2.5"
                  placeholder="Masukkan Nama"
                  value="{{$user->nama_lengkap}}"
                  required
                />
              </div>
              <div>
                <label
                  for="username"
                  class="block mb-2 text-sm font-medium text-gray-600"
                  >Username</label
                >
                <input
                  type="text"
                  id="username"
                  name="username"
                  class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-indigo-500 focus:border-blue-500 block w-full p-2.5"
                  placeholder="Masukkan username"
                  value="{{$user->username}}"
                  required
                />
              </div>
              <div class="relative">
                <label
                  for="bidang"
                  class="block mb-2 text-sm font-medium text-gray-600"
                  >Bidang</label
                >
                <select id="bidang" name="bidang" class="text-gray-600 w-full">
                <option selected class="text-sm">Pilih Bidang</option>
                @foreach ($bidang2x as $bidang)            
                  <option value="{{$bidang->id}}">{{$bidang->nama_bidang}}</option>
                @endforeach
                </select>
                @error('bidang')
                    <span>{{ $message }}</span>
                @enderror
              </div>
              <div class="password relative">
                <label
                  for="password"
                  class="block mb-2 text-sm font-medium text-gray-600"
                  >Password</label
                >
                <svg
                  id="pw-view"
                  class="absolute right-3 bottom-2 text-gray-400"
                  xmlns="http://www.w3.org/2000/svg"
                  width="1.4em"
                  height="1.4em"
                  viewBox="0 0 48 48"
                >
                  <path
                    fill="currentColor"
                    d="M41.56 26.13a1.25 1.25 0 0 0 1.57.81c.65-.21 1.02-.91.81-1.57l-.001-.003C43.85 25.1 38.841 10 23.999 10C9.16 10 4.15 25.1 4.062 25.368l-.001.002c-.21.66.15 1.36.81 1.57s1.36-.15 1.57-.81C6.62 25.57 10.95 12.5 24 12.5s17.38 13.07 17.56 13.63M17.5 27a6.5 6.5 0 1 1 13 0a6.5 6.5 0 0 1-13 0m6.5-9a9 9 0 1 0 0 18a9 9 0 0 0 0-18"
                  />
                </svg>
                <svg
                  id="pw-hidden"
                  class="absolute right-3 hidden bottom-2 text-gray-600"
                  xmlns="http://www.w3.org/2000/svg"
                  width="1.4em"
                  height="1.4em"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill="currentColor"
                    d="M2.854 2.146a.5.5 0 1 0-.708.708l3.5 3.498a8.1 8.1 0 0 0-3.366 5.046a.5.5 0 1 0 .98.204a7.1 7.1 0 0 1 3.107-4.528L7.953 8.66a3.5 3.5 0 1 0 4.886 4.886l4.307 4.308a.5.5 0 0 0 .708-.708zm9.265 10.68A2.5 2.5 0 1 1 8.673 9.38zm-1.995-4.824l3.374 3.374a3.5 3.5 0 0 0-3.374-3.374M10 6c-.57 0-1.129.074-1.666.213l-.803-.803A7.7 7.7 0 0 1 10 5c3.693 0 6.942 2.673 7.72 6.398a.5.5 0 0 1-.98.204C16.058 8.327 13.207 6 10 6"
                  />
                </svg>
                <input
                  type="password"
                  id="password"
                  name="password"
                  class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-indigo-500 focus:border-blue-500 block w-full p-2.5"
                  placeholder="Masukkan Password"
                  required
                />
              </div>
            </div>

            <button
              type="submit"
              class="text-white bg-indigo-600 border border-indigo-600 hover:bg-transparent focus:ring-4 focus:outline-none focus:ring-indigo-300 hover:text-gray-600 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
            >
              Update
            </button>
          </form>
        </div>
      </section>
    </div>
@endsection