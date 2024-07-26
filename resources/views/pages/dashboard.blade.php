@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    @vite('resources/js/dashboard.js')
@endpush

@extends('layouts.app')

@section('content')
    <section
    class="overflow-hidden main-content flex-auto mt-12 px-2 xl:w-3/4 xl:ml-auto xl:pr-4"
    >
    <h1 class="text-gray-500 mb-4">
    <ol class="flex items-center whitespace-nowrap">
        <li class="inline-flex items-center">
        <a
            class="flex items-center text-[20px] text-gray-600 hover:text-indigo-600 focus:outline-none focus:text-indigo-600 dark:text-neutral-600 dark:hover:text-indigo-600 dark:focus:text-indigo-600"
            href="#"
        >
            Dashboard
        </a>
        </li>
    </ol>
    </h1>

    <ul class="mt-6 flex gap-5 flex-wrap justify-center">
    <li
        class="flex items-center w-[290px] pl-6 h-28 rounded-lg gap-5 bg-white bg-shadow"
    >
        <span
        class="text-blue-400 w-14 h-14 flex justify-center items-center rounded-full bg-blue-100"
        >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="1.7em"
            height="1.7em"
            viewBox="0 0 1024 1024"
        >
            <path
            fill="currentColor"
            d="M763.024 259.968C718.4 141.536 622.465 66.527 477.553 66.527c-184.384 0-313.392 136.912-324.479 315.536C64.177 410.495.002 501.183.002 603.903c0 125.744 98.848 231.968 215.823 231.968h92.448c17.664 0 32-14.336 32-32c0-17.68-14.336-32-32-32h-92.448c-82.304 0-152.832-76.912-152.832-167.968c0-80.464 56.416-153.056 127.184-165.216l29.04-5.008l-2.576-29.328l-.24-.368c0-155.872 102.576-273.44 261.152-273.44c127.104 0 198.513 62.624 231.537 169.44l6.847 22.032l23.056.496c118.88 2.496 223.104 98.945 223.104 218.77c0 109.055-72.273 230.591-181.696 230.591h-73.12c-17.664 0-32 14.336-32 32c0 17.68 14.336 32 32 32l72.88-.095c160-4.224 243.344-157.071 243.344-294.495c0-147.712-115.76-265.744-260.48-281.312zM535.985 514.941c-.176-.192-.241-.352-.354-.512l-8.095-8.464c-4.432-4.688-10.336-7.008-16.24-6.976c-5.905-.048-11.777 2.288-16.289 6.975l-8.095 8.464c-.16.16-.193.353-.336.513L371.072 642.685c-8.944 9.344-8.944 24.464 0 33.84l8.064 5.471c8.945 9.344 23.44 6.32 32.368-3.024l68.113-75.935v322.432c0 17.664 14.336 32 32 32s32-14.336 32-32V603.34l70.368 77.631c8.944 9.344 23.408 12.369 32.336 3.025l8.064-5.472c8.945-9.376 8.945-24.496 0-33.84z"
            />
        </svg>
        </span>
        <div>
        <h2 class="text-2xl font-medium text-gray-600">{{$aset['tersimpan']}}</h2>
        <p class="text-gray-400">Aset Tersimpan</p>
        </div>
    </li>
    <li
        class="flex items-center w-[290px] pl-6 h-28 rounded-lg gap-5 bg-white bg-shadow"
    >
        <span
        class="text-amber-400 w-14 h-14 flex justify-center items-center rounded-full bg-yellow-100"
        >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="1.6em"
            height="1.6em"
            fill="currentColor"
            class="bi bi-hourglass-split"
            viewBox="0 0 16 16"
        >
            <path
            d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"
            />
        </svg>
        </span>
        <div>
        <h2 class="text-2xl font-medium text-gray-600">{{$aset['tertunda']}}</h2>
        <p class="text-gray-400">Aset Tertunda</p>
        </div>
    </li>
    <li
        class="flex items-center w-[290px] pl-6 h-28 rounded-lg gap-5 bg-white bg-shadow"
    >
        <span
        class="text-red-400 w-14 h-14 flex justify-center items-center rounded-full bg-red-100"
        >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="1.5em"
            height="1.5em"
            fill="currentColor"
            class="bi bi-trash3"
            viewBox="0 0 16 16"
        >
            <path
            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"
            />
        </svg>
        </span>
        <div>
        <h2 class="text-2xl font-medium text-gray-600">{{$aset['terhapus']}}</h2>
        <p class="text-gray-400">Aset Terhapus</p>
        </div>
    </li>
    </ul>

    <div class="mt-8 bg-white px-6 py-10 rounded-lg">
    <p class="text-gray-500 ml-3 text-xl font-medium">
        Total Asset Tahun Ini
    </p>
    <div id="chart" class="mt-6"></div>
    </div>
    </section>
@endsection