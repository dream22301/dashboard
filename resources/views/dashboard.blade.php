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
<div class="min-h-screen flex">
  <aside class="min-w-48 shadow-2xl shadow-black bg-gray-800 text-white flex items-center flex-col gap-2">
    <div class="icon">
      <img src="{{ asset('img/account.svg') }}" alt="img" class="w-20">
    </div>
    <div class="bg-blend-difference bg-gray-500 w-38 border-black rounded-sm">
      <label class="flex justify-center">User</label>
    </div>
  </aside>

  <main class="flex justify-center items-center w-full">
    <h1>dashboard text (for now)</h1>
  </main>
</div>

</body>
</html>