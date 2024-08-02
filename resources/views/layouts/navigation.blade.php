<aside
    class="z-50 xl:pr-4 px-2 pb-4 pt-5 gap-7 w-full flex sticky top-0 h-16"
>
    <div
    id="aside-content"
    class="w-72 aside-content xl:mt-0 xl:ml-0 ml-2 top-24 -left-full transition-left duration-300 bg-white rounded-lg absolute xl:static bg-shadow h-screen"
    >
    <div
        class="mt-4 xl:flex hidden xl:justify-center justify-between xl:px-0 px-5 relative"
    >
        <div class="flex gap-4 justify-center items-center">
        <img src="{{ Vite::asset('resources/img/logo.png') }}" class="w-9" alt="" />
        <h1
            class="brands text-indigo-400 text-xl tracking-[1px] font-semibold"
        >
            A Manage
        </h1>
        </div>

        <svg
        id="close-aside"
        class="xl:hidden text-gray-400 rounded-full right-0"
        xmlns="http://www.w3.org/2000/svg"
        width="1.8em"
        height="1.8em"
        viewBox="0 0 512 512"
        >
        <path
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="32"
            d="M368 368L144 144m224 0L144 368"
        />
        </svg>
    </div>
    <ul class="mt-10 relative flex flex-col">
        <li class="flex justify-center mb-7">
        <a
            href="{{ route('dashboard') }}"
            class="flex icon-list-aside w-10/12 text-[15px] text-gray-400 gap-4 hover:text-indigo-400 focus:text-indigo-400"
        >
            <svg
            xmlns="http://www.w3.org/2000/svg"
            width="1.6em"
            height="1.6em"
            viewBox="0 0 36 36"
            >
            <path
                fill="currentColor"
                d="m25.18 12.32l-5.91 5.81a3 3 0 1 0 1.41 1.42l5.92-5.81Z"
                class="clr-i-outline clr-i-outline-path-1"
            />
            <path
                fill="currentColor"
                d="M18 4.25A16.49 16.49 0 0 0 5.4 31.4l.3.35h24.6l.3-.35A16.49 16.49 0 0 0 18 4.25m11.34 25.5H6.66a14.43 14.43 0 0 1-3.11-7.84H7v-2H3.55A14.4 14.4 0 0 1 7 11.29l2.45 2.45l1.41-1.41l-2.43-2.46A14.4 14.4 0 0 1 17 6.29v3.5h2V6.3a14.47 14.47 0 0 1 13.4 13.61h-3.48v2h3.53a14.43 14.43 0 0 1-3.11 7.84"
                class="clr-i-outline clr-i-outline-path-2"
            />
            <path fill="none" d="M0 0h36v36H0z" />
            </svg>
            <p class="list-aside mt-1 text-sm -top-2">Dashboard</p>
        </a>
        </li>
        @if (Auth::user()->is_admin)
        <li class="flex justify-center mb-7">

            <a
                href="{{ route('master-user') }}"
                class="flex w-10/12 icon-list-aside text-[15px] text-gray-400 gap-4 items-center hover:text-indigo-400 focus:text-indigo-400"
            >
                <svg
                xmlns="http://www.w3.org/2000/svg"
                width="1.6em"
                height="1.6em"
                viewBox="0 0 24 24"
                >
                <path
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M6.578 15.482c-1.415.842-5.125 2.562-2.865 4.715C4.816 21.248 6.045 22 7.59 22h8.818c1.546 0 2.775-.752 3.878-1.803c2.26-2.153-1.45-3.873-2.865-4.715a10.66 10.66 0 0 0-10.844 0M16.5 6.5a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0"
                    color="currentColor"
                />
                </svg>
                <p class="list-aside mt-1 text-sm">Master User</p>
            </a>
        </li>
        @endif
        <li
        class="transition duration-2000 ease-in-out flex justify-center overflow-hidden mb-7"
        >
        <div
            class="flex icon-list-aside w-10/12 text-[15px] text-gray-400 gap-4 hover:text-indigo-400 focus:text-indigo-400"
        >
            <svg
            xmlns="http://www.w3.org/2000/svg"
            width="1.7em"
            height="1.7em"
            viewBox="0 0 20 20"
            >
            <path
                fill="currentColor"
                d="M6.5 6a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1zM6 3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3zM4 6a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2z"
            />
            </svg>
            <div
            class="flex-auto w-40 dropdown-list-aside list-aside -right-40"
            >
            <div
                class="flex w-11/12 dropdown-asset items-center justify-between"
            >
                <p class="text-sm">Aset</p>
                <svg
                id="arrow-svg"
                class="rotate-90"
                xmlns="http://www.w3.org/2000/svg"
                width="1.8em"
                height="1.8em"
                viewBox="0 0 24 24"
                >
                <path
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="m17 14l-5-5l-5 5"
                />
                </svg>
            </div>
            <ul
                class="view-dropdown-asset hidden list-[circle] ml-5 mt-3 text-[15px]"
            >
                {{-- <li>
                <a href="{{ Auth::user()->is_admin ? route('asset-pending') : route('asset-pending-user', ['id' => 21])}}" class="text-sm">Pending</a>
                </li> --}}
                @if (Auth::user()->is_admin)
                <li>
                    <a href="{{ route('asset') }}" class="text-sm">Semua Barang</a>
                </li>
                <li>
                    <a href="{{ route('asset-removed') }}" class="text-sm">Removed</a>
                </li>
                @else
                <li>
                    <a href="{{ route('asset-bidang') }}" class="text-sm">Barang Bidang</a>
                </li>
                @endif
            </ul>
            </div>
        </div>
        </li>
        <li class="flex justify-center mb-7">
        <a
            href="{{ route('log') }}"
            class="flex w-10/12 icon-list-aside text-[15px] text-gray-400 gap-4 items-center hover:text-indigo-400 focus:text-indigo-400"
        >
            <svg
            xmlns="http://www.w3.org/2000/svg"
            width="1.6em"
            height="1.6em"
            viewBox="0 0 24 24"
            >
            <path
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.3"
                d="M6.209 12.324H4.401c-.579 0-1.048.47-1.048 1.048v6.83c0 .578.47 1.048 1.048 1.048H6.21c.58 0 1.049-.47 1.049-1.049v-6.829a1.05 1.05 0 0 0-1.049-1.049m6.694-9.573h-1.808c-.58 0-1.049.47-1.049 1.049V20.2c0 .58.47 1.049 1.05 1.049h1.807c.58 0 1.049-.47 1.049-1.049V3.8c0-.58-.47-1.049-1.05-1.049m6.696 5.176H17.79c-.58 0-1.049.47-1.049 1.05V20.2c0 .58.47 1.049 1.049 1.049h1.808a1.05 1.05 0 0 0 1.049-1.049V8.976c0-.58-.47-1.049-1.05-1.049"
            />
            </svg>
            <p class="list-aside text-sm mt-1">Log Aktivitas</p>
        </a>
        </li>
        <li class="flex justify-center mb-7">
            <a
                href="{{ route('log-adjestment') }}"
                class="flex w-10/12 icon-list-aside text-[15px] text-gray-400 gap-4 items-center hover:text-indigo-400 focus:text-indigo-400"
            >
                <svg
                xmlns="http://www.w3.org/2000/svg"
                width="1.6em"
                height="1.6em"
                viewBox="0 0 24 24"
                >
                <path
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.3"
                    d="M6.209 12.324H4.401c-.579 0-1.048.47-1.048 1.048v6.83c0 .578.47 1.048 1.048 1.048H6.21c.58 0 1.049-.47 1.049-1.049v-6.829a1.05 1.05 0 0 0-1.049-1.049m6.694-9.573h-1.808c-.58 0-1.049.47-1.049 1.049V20.2c0 .58.47 1.049 1.05 1.049h1.807c.58 0 1.049-.47 1.049-1.049V3.8c0-.58-.47-1.049-1.05-1.049m6.696 5.176H17.79c-.58 0-1.049.47-1.049 1.05V20.2c0 .58.47 1.049 1.049 1.049h1.808a1.05 1.05 0 0 0 1.049-1.049V8.976c0-.58-.47-1.049-1.05-1.049"
                />
                </svg>
                <p class="list-aside text-sm mt-1">Log Penyesuaian Barang</p>
            </a>
            </li>
        <li class="flex justify-center mb-7">
        <div
            class="flex w-10/12 icon-list-aside text-[15px] text-gray-400 gap-4 items-center hover:text-indigo-400 focus:text-indigo-400"
        >
            <svg
            id="aside-toggle"
            class="border hidfden cursor-pointer xl:block mt-5 rounded-full transition-all border-gray-500"
            xmlns="http://www.w3.org/2000/svg"
            width="2em"
            height="2em"
            viewBox="0 0 24 24"
            >
            <path
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
                d="m14 7l-5 5l5 5"
            />
            </svg>
        </div>
        </li>
    </ul>
    </div>
    <nav
    class="flex-auto right-0 flex justify-center items-center bg-shadow rounded-lg h-16 bg-white"
    >
    <div class="text-gray-400 justify-between flex md:w-[95%] w-[89%]">
        <svg
        id="menu-toggle"
        class="xl:hidden block"
        xmlns="http://www.w3.org/2000/svg"
        width="2em"
        height="2em"
        viewBox="0 0 24 24"
        >
        <path
            fill="currentColor"
            d="M2 5.995c0-.55.446-.995.995-.995h8.01a.995.995 0 0 1 0 1.99h-8.01A.995.995 0 0 1 2 5.995M2 12c0-.55.446-.995.995-.995h18.01a.995.995 0 1 1 0 1.99H2.995A.995.995 0 0 1 2 12m.995 5.01a.995.995 0 0 0 0 1.99h12.01a.995.995 0 0 0 0-1.99z"
        />
        </svg>

        <div id="date-time" class="mt-2 text-gray-300"></div>

        <div
        id="show-items-profile"
        class="flex cursor-pointer items-center gap-2 relative hover:text-indigo-400 focus:text-indigo-400"
        >
        <svg
            class="border p-1 rounded border-gray-400"
            xmlns="http://www.w3.org/2000/svg"
            width="2.2em"
            height="2.2em"
            viewBox="0 0 24 24"
        >
            <g fill="none" stroke="currentColor" stroke-linecap="round">
            <circle cx="12" cy="8" r="3.5" />
            <path
                d="M4.85 16.948c.639-2.345 3.065-3.448 5.495-3.448h3.31c2.43 0 4.856 1.103 5.496 3.448a9.95 9.95 0 0 1 .295 1.553c.06.55-.394.999-.946.999h-13c-.552 0-1.005-.45-.946-.998a9.94 9.94 0 0 1 .295-1.554Z"
            />
            </g>
        </svg>

        <div class="md:block hidden text-sm">{{Auth::user()->nama_lengkap}}</div>
        <svg
            class="md:block hidden"
            id="arrow-profile"
            xmlns="http://www.w3.org/2000/svg"
            width="1.7em"
            height="1.7em"
            viewBox="0 0 24 24"
        >
            <path
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="1.5"
            d="m17 14l-5-5l-5 5"
            />
        </svg>

        <div
            id="items-profile"
            class="items-profile absolute overflow-hidden bg-white divide-y w-40 right-0 top-14 bg-shadow rounded"
        >
            <a href="{{ route('profile', ['id' => Auth::user()->id]) }}" class="flex gap-5 ml-4 py-3">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="1.4em"
                height="1.4em"
                viewBox="0 0 24 24"
            >
                <g
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
                color="currentColor"
                >
                <path
                    d="M16.308 4.384c-.59 0-.886 0-1.155-.1l-.111-.046c-.261-.12-.47-.328-.888-.746c-.962-.962-1.443-1.443-2.034-1.488a2 2 0 0 0-.24 0c-.591.045-1.072.526-2.034 1.488c-.418.418-.627.627-.888.746l-.11.046c-.27.1-.565.1-1.156.1h-.11c-1.507 0-2.261 0-2.73.468s-.468 1.223-.468 2.73v.11c0 .59 0 .886-.1 1.155q-.022.057-.046.111c-.12.261-.328.47-.746.888c-.962.962-1.443 1.443-1.488 2.034a2 2 0 0 0 0 .24c.045.591.526 1.072 1.488 2.034c.418.418.627.627.746.888q.025.054.046.11c.1.27.1.565.1 1.156v.11c0 1.507 0 2.261.468 2.73s1.223.468 2.73.468h.11c.59 0 .886 0 1.155.1q.057.021.111.046c.261.12.47.328.888.746c.962.962 1.443 1.443 2.034 1.488q.12.009.24 0c.591-.045 1.072-.526 2.034-1.488c.418-.418.627-.626.888-.746q.054-.025.11-.046c.27-.1.565-.1 1.156-.1h.11c1.507 0 2.261 0 2.73-.468s.468-1.223.468-2.73v-.11c0-.59 0-.886.1-1.155q.021-.057.046-.111c.12-.261.328-.47.746-.888c.962-.962 1.443-1.443 1.488-2.034q.009-.12 0-.24c-.045-.591-.526-1.072-1.488-2.034c-.418-.418-.626-.627-.746-.888l-.046-.11c-.1-.27-.1-.565-.1-1.156v-.11c0-1.507 0-2.261-.468-2.73s-1.223-.468-2.73-.468z"
                />
                <path d="M15.5 12a3.5 3.5 0 1 1-7 0a3.5 3.5 0 0 1 7 0" />
                </g>
            </svg>
            <p>Profile</p>
            </a>
            <a href="{{ route('logout') }}" class="flex gap-4 text-red-400 ml-4 py-3">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="1.7em"
                height="1.7em"
                viewBox="0 0 24 24"
            >
                <path
                fill="currentColor"
                d="M5.616 20q-.691 0-1.153-.462T4 18.384V5.616q0-.691.463-1.153T5.616 4h6.403v1H5.616q-.231 0-.424.192T5 5.616v12.769q0 .23.192.423t.423.192h6.404v1zm10.846-4.461l-.702-.72l2.319-2.319H9.192v-1h8.887l-2.32-2.32l.702-.718L20 12z"
                />
            </svg>
            <p>Log out</p>
            </a>
        </div>
        </div>
    </div>
    </nav>
</aside>