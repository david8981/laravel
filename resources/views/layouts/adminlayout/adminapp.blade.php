<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assetslayout/css/bootstrap.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assetslayout/css/font-awesome.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('assetslayout/css/fontastic.css') }}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="{{ asset('assetslayout/css/css.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assetslayout/css/style.css') }}" id="theme-stylesheet"><link id="new-stylesheet" rel="stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('assetslayout/css/custom.css') }}">
    
    @yield('stylesheets')
</head>
<body>
    <div class="page">
      {{-- loading layout header --}}
      @include('layouts.adminlayout.partials.header')
      
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
      {{-- loading sidebar here --}}
      @include('layouts.adminlayout.partials.sidebar')
         
         <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">{{ $header_name }}</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
           @yield('breadcamp')
          </div>
            <div class="container-fluid">
                <div class=""> 
                @if ($errors->any())
                   
                    <div class="alert alert-danger" style="margin-top: 10px;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
              </div>
            </div>
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>India today © {{ date('Y') }}</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Version 1.4.5</p>
                </div>
              </div>
            </div>
          </footer>

      </div>
    </div>

</div>
 <script src="{{ asset('assetslayout/js/jquery_002.js') }}"></script>
 <script src="{{ asset('assetslayout/js/popper.js') }}"> </script>
 <script src="{{ asset('assetslayout/js/bootstrap.js')}}"></script>
 <script src="{{ asset('assetslayout/js/jquery_003.js') }}"> </script>
 <script src="{{ asset('assetslayout/js/Chart.js') }}"></script>
 <script src="{{ asset('assetslayout/js/jquery.js') }}"></script>
    <!-- Main File-->
 <script src="{{ asset('assetslayout/js/front.js') }}"></script>
 {{-- Page css load here --}}
 @yield('scripts')
</body>
</html>
</body>
