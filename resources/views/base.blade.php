<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Main Page</title>
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">

</head>
<style>
    body {
        font-family: ui-monospace, SFMono-Regular, SF Mono, Menlo, Consolas, Liberation Mono, monospace;
        font-size: 16px;
        text-wrap: pretty;
    }

</style>
<body class="bg-black">
    @include('navbar') <!-- Navbar termasuk di sini -->
    <div class="container container mx-auto px-4 py-6">
      @yield('content') <!-- Bagian konten dari halaman lain akan tampil di sini -->
    </div>
    @vite('resources/js/app.js')
</body>
</html>
