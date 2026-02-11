<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('judul')</title>
  @vite(['resources/css/app.css'])
</head>

<body>
  <div class="grid grid-cols-[16rem_2fr] min-h-screen">
    <aside class="bg-white grid grid-rows-[5rem_1fr] h-full p-6 gap-4 relative">
      <div class="absolute right-0 h-full w-[0.05rem] bg-[#ababab]"></div>
      <div class="h-full flex flex-rows items-center relative">
        <div class="absolute bottom-0 w-full h-[0.05rem] bg-[#ababab]"></div>
        <img src="{{ asset('img/smkgo.svg') }}" alt="account" class="w-15">
        <div>
          <h3>SMKN 1 Lumajang</h3>
        </div>
      </div>
      <div class="flex flex-col gap-4 items-center">
        <div class="flex gap-1 flex-col relative">
          <div class="absolute bottom-0 w-full h-[0.05rem] bg-[#ababab]"></div>
          <p class="text-[#9da3a6] opacity-70">General</p>
          <a href="{{ route('halaman-utama') }}" class="w-50 h-8 rounded-md flex items-center gap-1.5">
            <img src="{{ asset('img/account.svg') }}">
            <span class="text-[#05090c]">Home</span>
          </a>
          <a href="{{ route('halaman-utama') }}" class="w-50 h-8 rounded-md flex items-center gap-1.5">
            <img src="{{ asset('img/account.svg') }}">
            <span class="text-[#05090c]">Home</span>
          </a>
        </div>
        <div class="flex gap-1 flex-col">
          <p class="text-[#9da3a6] opacity-70">Tools</p>
          <a href="{{ route('halaman-utama') }}" class="w-50 h-8 rounded-md flex items-center gap-1.5">
            <img src="{{ asset('img/account.svg') }}">
            <span class="text-[#05090c]">Home</span>
          </a>
          <a href="{{ route('halaman-utama') }}" class="w-50 h-8 rounded-md flex items-center gap-1.5">
            <img src="{{ asset('img/account.svg') }}">
            <span class="text-[#05090c]">Home</span>
          </a>
        </div>
      </div>
      
    </aside>

    <main>
      <div class="grid grid-rows-[5rem_2fr] w-full min-h-screen ">
        <div class="w-full min-h-full grid grid-cols-[64rem_1fr] relative">
          <div class="absolute bottom-0 w-full h-[0.05rem] bg-[#ababab]"></div>
          <div class="w-full">test</div>
          <div class="w-full flex relative items-center">
            <div class="absolute left-0 top-1/4 h-1/2 w-0.5 bg-gray-400"></div>
            <img src="{{ asset('img/account.svg') }}" alt="account" class="icon">
            <div>
              <h1>Username</h1>
              <p>Role</p>
            </div>
        </div>
      </div>
      <div class="w-full h-full bg-[#f9fbfc]">@yield('content')</div>
      </div>
    </main>
  </div>
</body>
</html>