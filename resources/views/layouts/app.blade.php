<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'LawSight Law')</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    
    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/accueil.css') }}" rel="stylesheet" >
    
    <!-- Additional CSS -->
    @stack('styles')
    
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <script src="{{ asset('js/respond.js') }}"></script>
    <![endif]-->
</head>
    <body>
        
        <div class="page-wrapper">
            @include('pages.header')  
                <main>
                    @yield('content')
                </main> 
            @include('pages.footer')   
            
            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}"></script>
            @stack('scripts')
        </div>  
        
    <!-- JavaScript Files -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/validate.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    
    <!-- Google Maps API -->
    <script src="https://maps.google.com/maps/api/js?key={{ config('services.google.maps_api_key') }}"></script>
    <script src="{{ asset('js/map-script.js') }}"></script>
    
    <!-- Additional Scripts -->
    @stack('scripts')
</body>
</html>
    