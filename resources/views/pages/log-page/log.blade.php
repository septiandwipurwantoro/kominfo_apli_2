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
    @vite('resources/css/log.css')
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
    @vite('resources/js/log.js')
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
            class="flex items-center text-[20px] text-gray-600 hover:text-indigo-600 focus:outline-none focus:text-indigo-600 dark:text-neutral-500 dark:hover:text-indigo-500 dark:focus:text-indigo-500"
            href="#"
        >
            Log Aktivitas
        </a>
    
        </li>
    
    </ol>
    </h1>

    <div class="mx-w-7xl">
    <table id="dataAsset" class="display nowrap" style="width: 100%">
        <thead>
            <tr class="text-gray-600 text-[15px]">
                <th width="0">No</th>
                <th width="180">Waktu Input</th>
                <th width="180">Aset</th>
                <th width="180">User</th>
                <th width="180">Aktivitas</th>
                {{-- <th class="sellect">
                    <input
                      id="selectAll"
                      type="checkbox"
                      class="checked:bg-indigo-500"
                    />
                </th> --}}
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
                {{-- <td>
                    <input
                      type="checkbox"
                      class="rowCheckbox checked:bg-indigo-500"
                    />
                </td> --}}
            </tr>
            @endforeach
            {{-- <tr class="text-left text-sm text-gray-600">
                <!-- <td>1</td> -->
                <td>1</td>
            
                <td class="waktu-input"></td>
                <td>Lorem ipsum dolor sit.</td>
                <td>Perdi</td>
                <td>Menghapus</td>
                <td>
                <input
                    type="checkbox"
                    class="rowCheckbox checked:bg-indigo-500"
                />
                </td>
            </tr> --}}
        </tbody>
    </table>
    </div>
    </section>
@endsection