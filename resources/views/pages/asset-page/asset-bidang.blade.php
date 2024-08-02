@push('styles')
    <!-- datatables -->
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css"
    />
    <!-- sellect fitur -->
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/select/2.0.3/css/select.dataTables.css"
    />
    @vite('resources/css/asset-bidang.css')
@endpush

@push('scripts')
    <!-- ======= datatables ======= -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <!-- responsive -->
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.dataTables.js"></script>
    <!-- include button -->
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.colVis.min.js"></script>
    <!-- Select data -->
    <script src="https://cdn.datatables.net/select/2.0.3/js/dataTables.select.js"></script>
    <script src="https://cdn.datatables.net/select/2.0.3/js/select.dataTables.js"></script>
    @vite('resources/js/asset-bidang.js')
@endpush

@extends('layouts.app')

@section('content')
    <section
    class="main-content flex-auto mt-12 px-2 xl:w-3/4 xl:ml-auto xl:pr-4"
    >
    <h1 class="text-gray-500 mb-4">
    <ol class="flex items-center whitespace-nowrap">
        <li class="inline-flex items-center">
        <a
            class="flex items-center text-[20px] text-gray-500 hover:text-indigo-600 focus:outline-none focus:text-indigo-600 dark:text-neutral-500 dark:hover:text-indigo-500 dark:focus:text-indigo-500"
            href="#"
        >
            Aset
        </a>
        <svg
            class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
        >
            <path d="m9 18 6-6-6-6"></path>
        </svg>
        </li>
        <li class="inline-flex items-center">
        <a
            class="flex items-center text-[20px] text-gray-600 hover:text-indigo-600 focus:outline-none focus:text-indigo-600 dark:text-neutral-600 dark:hover:text-indigo-600 dark:focus:text-indigo-600"
            href="#"
        >
            Detail Aset
        </a>
        </li>
    </ol>
    </h1>

    <div class="mx-w-7xl">
    <form action="{{ route('adjust-asset') }}" method="post" class="m-3" enctype="multipart/form-data">
    @csrf
        <table id="dataAsset" class="display nowrap" style="width: 100%">
            <thead>
            <tr class="text-gray-600 text-[15px]">
                <th>No</th>
                <th width="180">Foto</th>
                <th width="180">Nama</th>
                <th width="180">Deskripsi</th>
                <th width="60">Jumlah</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($aset2x as $aset)        
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><img class="img-fluid" style="width: 18rem;" src="{{ asset('gambar_aset/' . $aset->foto) }}" alt=""></td>
                    <td>{{$aset->nama_aset}}</td>
                    <td>{{$aset->diskripsi}}</td>
                    <td>{{$aset->kuantitas}}</td>
                    <td>
                        <input
                            name="adjustInput[{{$aset->id}}]"
                            type="number"
                            class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded focus:ring-indigo-500 focus:border-blue-500 block w-full p-2.5"
                            min="-{{$aset->kuantitas}}"
                        />
                    </td>
                </tr>
                @endforeach
            </tbody>
            @if (Session::has('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <ul>
                        <li>{{ Session::get('success') }}</li>
                    </ul>
                </div>
            @endif
            @if (Session::has('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <ul>
                        <li>{{ Session::get('error') }}</li>
                    </ul>
                </div>
            @endif
        </table>
    </form>
    </div>
    </section>
@endsection