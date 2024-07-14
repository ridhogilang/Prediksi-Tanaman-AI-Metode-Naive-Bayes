
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Deteksi keseburan tanah pada lahan pertanian sangat penting untuk mengetahui jenis tanaman yang cocok pada tanah tersebut.">
  <meta name="keywords" content="sistem prediksi, naive bayes, prediksi tanah,">
  <meta name="author" content="Projek Ridho">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title }}</title>
  <link rel="shortcut icon" href="{{ asset('home/assets/gambar/icon/plant.png') }}">
  <link rel="stylesheet" href="{{ asset('home/assets/css/plugins.css') }}">
  <link rel="stylesheet" href="{{ asset('home/assets/css/style.css') }}">
  @stack('header')
</head>

<body>
  <div class="content-wrapper">
    @include('partials.header')

    @yield('container')

    @include('partials.footer')
 </div>
  
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="{{ asset('home/assets/js/plugins.js') }}"></script>
  <script src="{{ asset('home/assets/js/theme.js') }}"></script>
  @stack('footer')
</body>

</html>