@push('styles')
    <!-- dropdown Select -->
    <link
      href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
      rel="stylesheet"
    />
    @vite('resources/css/create-asset.css')
@endpush

@push('scripts')
    <!-- dropdown search -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>  
    @vite('resources/js/create-asset.js')
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
                Tambah Aset
              </a>
            </li>
          </ol>
        </h1>

        <div class="mx-w-7xl bg-white p-5 rounded-lg bg-shadow">
            <form action="{{ route('store-asset') }}" method="post" class="m-3" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2 overflow-hidden">
            <div>
                <label
                for="name"
                class="block mb-2 text-sm font-medium text-gray-600"
                >Nama Aset</label
                >
                <input
                type="text"
                id="name"
                name="nama"
                class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-indigo-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Masukkan Nama Aset"
                required
                />
            </div>
            <div>
                <label
                for="nominal"
                class="block mb-2 text-sm font-medium text-gray-600"
                >Nominal</label
                >
                <input
                type="number"
                id="nominal"
                name="nominal"
                class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-indigo-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Masukkan Nominal"
                required
                />
            </div>
            <div class="relative">
                <label
                for="sumber"
                class="block mb-2 text-sm font-medium text-gray-600"
                >Sumber</label
                >
                <select id="sumber" name="sumber" class="text-gray-600 w-full">
                <option selected class="text-sm">Pilih Sumber</option>
                <option value="e-Katalog">e-Katalog</option>
                <option value="Pengadaan Langsung">Pengadaan Langsung</option>
                <option value="Hibah">Hibah</option>
                </select>
            </div>
            <div>
                <label
                for="jumlah"
                class="block mb-2 text-sm font-medium text-gray-600"
                >Jumlah</label
                >
                <input
                type="number"
                id="jumlah"
                name="kuantitas"
                class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-indigo-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Masukkan Jumlah Aset"
                required
                />
            </div>
            <div>
                <label
                for="message"
                class="block mb-2 text-sm font-medium text-gray-600"
                >Deskripsi</label
                >
                <textarea
                id="message"
                name="diskripsi"
                class="block p-2.5 w-full h-48 text-sm text-gray-600 focus:outline-none bg-gray-50 rounded-lg border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                placeholder="Masukkan Deskripsi . . . ."
                ></textarea>
            </div>

            <div class="flex items-center justify-center w-full relative">
                <svg
                id="trush-img"
                class="absolute z-50 cursor-pointer hidden right-1 rounded top-1 p-[3px] text-white bg-red-500"
                xmlns="http://www.w3.org/2000/svg"
                width="1.9em"
                height="1.9em"
                viewBox="0 0 16 16"
                >
                <path
                    fill="currentColor"
                    fill-rule="evenodd"
                    d="M10 3h3v1h-1v9l-1 1H4l-1-1V4H2V3h3V2a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1zM9 2H6v1h3zM4 13h7V4H4zm2-8H5v7h1zm1 0h1v7H7zm2 0h1v7H9z"
                    clip-rule="evenodd"
                />
                </svg>
                <label
                for="dropimg-file"
                class="flex flex-col items-center justify-center w-full h-56 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 drop-container"
                >
                <div
                    class="image-container absolute w-full h-full flex items-center justify-center overflow-hidden p-1"
                >
                </div>
                <div
                    class="label-img flex flex-col items-center justify-center pt-5 pb-6"
                >
                    <svg
                    class="w-8 h-8 mb-1 text-gray-400"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 20 16"
                    >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"
                    />
                    </svg>
                    <p class="mb-2 text-[13px] text-center text-gray-500">
                    <span class="font-medium"
                        >Klik atau seret dan lepas untuk mengunggah aset</span
                    >
                    </p>
                    <p class="text-[12px] text-gray-500">SVG, PNG, JPG</p>
                </div>
                <input id="dropimg-file" name="image" type="file" class="hidden" />
                </label>
            </div>
            </div>

            <button
            type="submit"
            class="text-white bg-indigo-600 border border-indigo-600 hover:bg-transparent focus:ring-4 focus:outline-none focus:ring-indigo-300 hover:text-gray-600 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
            >
            Tambah
            </button>
          </form>
        </div>
      </section>
    </div>
@endsection