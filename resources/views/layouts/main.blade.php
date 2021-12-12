<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/app.css" rel="stylesheet">
  <title>{{ $title }}</title>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</head>
<body>
    @include('partials.navbar')
    {{-- <i class="{{ $icon }}"></i> --}}
    @if( $title =="Home")
      @include('partials.main_navbar')
    @endif
    <br>
    @yield('container')

    
</body>
</html>