<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite(['resources/css/app.css'])
</head>

<body>
  <div class="grid grid-cols-[16rem_2fr] min-h-screen">
    <aside class="bg-gray-500 grid grid-rows-[auto_1fr] h-full p-6 gap-12">
      <div class="bg-amber-500 h-auto flex flex-rows items-center gap-8">
        <img src="{{ asset('img/account.svg') }}" alt="account" class="icon">
        <div class="">
          <h3>User</h3>
        </div>
      </div>
      <div class="bg-blue-600">
        <div class="bg-gray-700 w-full h-16 ">
          <p>test</p>
        </div>
      </div>
      
    </aside>

    <main class="flex items-center justify-center">
      <h1>text</h1>
    </main>
  </div>
</body>
</html>