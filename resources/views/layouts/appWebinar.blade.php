<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

       <!-- swiper js  -->
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

    <!-- way points-->

    <!-- <script src="/path/to/noframework.waypoints.min.js"></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 
    
    <script src="https://kit.fontawesome.com/9ad606462a.js" crossorigin="anonymous"></script>
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- swiper.css  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    
    <link rel="stylesheet" href="https://rawgit.com/lykmapipo/themify-icons/master/css/themify-icons.css">

</head>
<body>
    <div id="progres-bar"></div>
    <div id="scroll-path"></div>
    <div id="app">
        <nav  id="navbar">
            <div class="nav-left">
                <div class="img-logo">
                    <img class="angogi-profile" src="images/logo-keyFunnel-1.png" alt="angogi-profile">
                </div>
                <h2 class="">KeyFunnel</h2><h6>Marketing & Digital Solutions</h6>
            </div>
        </nav>

        <main  id="showcase">
            @yield('webinar')
            
        </main>
        <!-- <div class="contact-icons" id="contact-icons">  
            <a class="icons" href="https://api.whatsapp.com/send?phone=34618210562&text=Hola Francisco, quiero obtener mi prueba gratuita de marketing digital!">
                <i class="fab fa-facebook-messenger"></i> 
            </a> 
            <div class="vertical-line icons"></div>
            <a class="icons" href="https://api.whatsapp.com/send?phone=34618210562&text=Hola Francisco, quiero obtener mi prueba gratuita de marketing digital!">
                <i class="fab fa-whatsapp"></i> 
            </a>
            
           
        </div> -->
        
    </div>
  

</body>
</html>