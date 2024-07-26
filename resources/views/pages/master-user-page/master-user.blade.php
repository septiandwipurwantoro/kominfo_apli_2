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
    @vite('resources/css/master-user.css')
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
    @vite('resources/js/master-user.js')
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
              class="flex items-center text-[20px] text-gray-600 hover:text-indigo-600 focus:outline-none focus:text-indigo-600 dark:text-neutral-600 dark:hover:text-indigo-600 dark:focus:text-indigo-600"
              href="#"
            >
              Master User
            </a>
          </li>
        </ol>
      </h1>

      <div class="mx-w-7xl">
        <table id="dataAsset" class="display nowrap" style="width: 100%">
            <thead>
            
            <tr class="text-gray-600 text-[15px]">
                <th width="0">No</th>
                <th width="180">Username</th>
                <th width="180">Nama</th>
                <th width="180">Bidang</th>
                <th width="100">Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->nama_lengkap}}</td>
                    <td>{{$user->bidang->nama_bidang}}</td>
                <td>
                    <div
                        class="relative toggleAsset cursor-pointer hover:text-indigo-600 w-10 h-10 flex items-center justify-center"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="1.3em"
                            height="1.3em"
                            viewBox="0 0 24 24"
                        >
                            <path
                            fill="currentColor"
                            d="M14.5 12a2.5 2.5 0 0 1-5 0a2.5 2.5 0 0 1 5 0m-1 0a1.5 1.5 0 1 0-3.001.001A1.5 1.5 0 0 0 13.5 12m1-7.437a2.5 2.5 0 0 1-5 0a2.5 2.5 0 0 1 5 0m-1 0a1.5 1.5 0 1 0-3.001.001a1.5 1.5 0 0 0 3.001-.001m1 14.874a2.5 2.5 0 0 1-5 0a2.5 2.5 0 0 1 5 0m-1 0a1.5 1.5 0 1 0-3.001.001a1.5 1.5 0 0 0 3.001-.001"
                            />
                        </svg>
                        </div>
                        <div
                        class="h-0 z-50 toggleAsset-view overflow-hidden absolute rounded bg-shadow bg-gray-50 w-32 px-4 right-10"
                        >
                        <a
                            href="{{route('edit-user', ['id' => $user->id])}}"
                            class="flex border-b pb-3 my-4 gap-3 hover:text-indigo-600"
                        >
                            <svg
                            class=""
                            xmlns="http://www.w3.org/2000/svg"
                            width="1.4em"
                            height="1.4em"
                            viewBox="0 0 48 48"
                            >
                            <path
                                fill="currentColor"
                                d="M41.974 6.025a6.907 6.907 0 0 0-9.768 0L8.038 30.197a6 6 0 0 0-1.572 2.758L4.039 42.44a1.25 1.25 0 0 0 1.52 1.52l9.487-2.424a6 6 0 0 0 2.76-1.572l24.168-24.172a6.907 6.907 0 0 0 0-9.767m-8 1.768a4.407 4.407 0 0 1 6.233 6.232L38 16.232l-6.232-6.233zM30 11.767L36.232 18L16.038 38.196a3.5 3.5 0 0 1-1.611.918l-7.443 1.902l1.904-7.441c.156-.61.473-1.166.917-1.61z"
                            />
                            </svg>
                            <span>Edit</span>
                        </a>
                          <!-- Button to open the modal -->
                          <button id="openModal-{{$user->id}}" class="flex my-4 gap-3 text-red-500 hover:text-red-600">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="1.4em"
                                height="1.4em"
                                viewBox="0 0 28 28"
                                >
                                <path
                                    fill="currentColor"
                                    d="M11.5 6h5a2.5 2.5 0 0 0-5 0M10 6a4 4 0 0 1 8 0h6.25a.75.75 0 0 1 0 1.5h-1.31l-1.217 14.603A4.25 4.25 0 0 1 17.488 26h-6.976a4.25 4.25 0 0 1-4.235-3.897L5.06 7.5H3.75a.75.75 0 0 1 0-1.5zM7.772 21.978a2.75 2.75 0 0 0 2.74 2.522h6.976a2.75 2.75 0 0 0 2.74-2.522L21.436 7.5H6.565zM11.75 11a.75.75 0 0 1 .75.75v8.5a.75.75 0 0 1-1.5 0v-8.5a.75.75 0 0 1 .75-.75m5.25.75a.75.75 0 0 0-1.5 0v8.5a.75.75 0 0 0 1.5 0z"
                                />
                            </svg>
                            <span>Hapus</span>
                          </button>

                          <!-- Modal -->
                          <div id="modal-{{$user->id}}" class="fixed inset-0 flex items-center justify-center hidden bg-black bg-opacity-50">
                              <div class="bg-white rounded-lg shadow-lg w-1/3">
                                  <!-- Modal header -->
                                  <div class="flex items-center justify-between px-4 py-2 border-b">
                                      <h3 class="text-lg font-semibold">Apakah anda yakin?</h3>
                                      <button class="closeModal text-gray-500 hover:text-gray-700">&times;</button>
                                  </div>
                                  <!-- Modal body -->
                                  <div class="p-4">
                                      <p>Anda akan menghapus {{$user->nama_lengkap}}</p>
                                  </div>
                                  <!-- Modal footer -->
                                  <div class="flex items-center justify-end px-4 py-2 border-t">
                                      <a href="{{ route('delete-user', ['id' => $user->id]) }}" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Hapus</a>
                                      <button class="closeModal py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Batalkan</button>
                                  </div>
                              </div>
                          </div>
                        </div>
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
        </table>
      </div>
    </section>
@endsection