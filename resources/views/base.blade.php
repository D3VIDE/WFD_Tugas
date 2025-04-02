<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Main Page</title>
  @vite('resources/css/app.css')
</head>
<style>
    body {
        font-family: ui-monospace, SFMono-Regular, SF Mono, Menlo, Consolas, Liberation Mono, monospace;
        font-size: 16px;
        text-wrap: pretty;
    }
    nav, nav a {
        font-family: ui-monospace, SFMono-Regular, SF Mono, Menlo, Consolas, Liberation Mono, monospace;
        font-size: 16px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-wrap: pretty;
        color: white;
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
