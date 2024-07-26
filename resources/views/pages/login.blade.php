<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />

    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['resources/css/login.css', 'resources/js/login.js'])
  </head>
  <body class="bg-indigo-100 w-screen h-screen overflow-hidden">
    <svg
      class="absolute bottom-0"
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 1440 320"
    >
      <path
        fill="#eef2ffbd"
        fill-opacity="1"
        d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>
    <main class="w-screen h-screen flex justify-center items-center">
      <section
        class="relative flex items-end xl:items-center w-8/12 h-[80%] overflow-hidden rounded-xl bg-white"
      >
        <div
          class="aside-conten-login text-white absolute flex items-center flex-col xl:justify-center justify-start pt-16 xl:pt-0 bg-indigo-300 left-0 top-0 h-full xl:w-[46%] w-full"
        >
          <p class="text-[18px] text-gray-100">Welcome To</p>
          <h1 class="font-semibold mb-2 text-4xl">A Manage</h1>
          <p class="text-[15px] text-gray-200">System asset management</p>
        </div>
        <div
          class="xl:w-[54%] w-full bg-white flex-col xl:h-full py-9 xl:py-10 h-[70%] rounded-t-[30px] z-50 ml-auto flex justify-between items-center"
        >
          <div class="flex items-center flex-col gap-1">
            <img src="{{ Vite::asset('resources/img/logo.png') }}" class="w-14 h-12" alt="" />
            <h2 class="text-blue-500 font-semibold text-xl">A MANAGE</h2>
            <p class="text-[14px] text-gray-400">Login to your account</p>
          </div>
          <form class="form w-[75%]" action="{{ route('login') }}" method="post" class="m-3">
            @csrf
            <h2
              class="admin hidden mb-5 text-lg tracking-wide font-medium text-gray-500"
            >
              Admninistrator
            </h2>
            <div class="group w-full">
              <input required="true" class="main-input w-full" name="username" type="text" />
              <label class="lebal-email tracking-wider">Username</label>
            </div>
            <div class="container-1 w-full">
              <div class="group">
                <input
                  id="password"
                  name="password"
                  type="password"
                  required="true"
                  class="main-input w-full"
                />
                <label class="lebal-email tracking-wider">Password</label>
                <svg
                  id="pw-view"
                  class="absolute right-3 bottom-2 text-gray-400"
                  xmlns="http://www.w3.org/2000/svg"
                  width="1.3em"
                  height="1.3em"
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
                  width="1.3em"
                  height="1.3em"
                  viewBox="0 0 20 20"
                >
                  <path
                    fill="currentColor"
                    d="M2.854 2.146a.5.5 0 1 0-.708.708l3.5 3.498a8.1 8.1 0 0 0-3.366 5.046a.5.5 0 1 0 .98.204a7.1 7.1 0 0 1 3.107-4.528L7.953 8.66a3.5 3.5 0 1 0 4.886 4.886l4.307 4.308a.5.5 0 0 0 .708-.708zm9.265 10.68A2.5 2.5 0 1 1 8.673 9.38zm-1.995-4.824l3.374 3.374a3.5 3.5 0 0 0-3.374-3.374M10 6c-.57 0-1.129.074-1.666.213l-.803-.803A7.7 7.7 0 0 1 10 5c3.693 0 6.942 2.673 7.72 6.398a.5.5 0 0 1-.98.204C16.058 8.327 13.207 6 10 6"
                  />
                </svg>
              </div>
            </div>

            <button
              class="submit py-2 w-full rounded-lg text-[16px] duration-150 mt-9 hover:bg-blue-600 bg-blue-500 text-white font-semibold"
            >
              Login
            </button>
          </form>
          <p class="text-gray-400 text-[13px] w-[80%] text-center">
            Dinas Komunikasi dan Informatika Kabupaten Kediri - &copy; 2024
          </p>
        </div>
      </section>
    </main>
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
  </body>
</html>
