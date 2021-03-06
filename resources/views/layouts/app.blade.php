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
    <link rel="stylesheet" href="path/to/swiper.css"/>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 
    
    <script src="https://kit.fontawesome.com/9ad606462a.js" crossorigin="anonymous"></script>
    
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
               
               
                <a href="{{ url('/') }}">
                    <div class="img-logo">
                        <img class="angogi-profile" src="images/logo-keyFunnel-2.png" alt="angogi-profile"> 
                    </div>
                    <div class="logo_contentText">
                        <h2 class="">KeyFunnel</h2><h6>Marketing & Digital Solutions</h6>
                    </div>
                </a>
               
                
            </div>
            
            <div class="bars-menu" id="bars">
                <i class="fab fa-buffer"></i>
            </div>
                
            <div class="nav-list" id="navList">
                <ul>
                    <li class="list-nav">
                        <a  href="/#home">Home</a>
                    </li>
                    <li class="list-nav">
                        <a href="/#about">About</a>
                    </li>
                    <li class="list-nav">
                        <a href="/#services">Services</a>
                    </li>
                    <li class="list-nav">
                        <a href="/#contact">Contact</a>
                    </li>
                </ul>
                <ul>
                    <!-- <li class="social">
                        <a href="https://www.google.com">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="social">
                        <a href="https://www.google.com">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="social">
                        <a href="https://www.google.com">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li> -->
                    <li class="social">
                        <div class="images-nav">
                        <!-- <a href="#"><img class="solutions-logo" src="images/solutions.png" alt="angogi-solutions-image"></a> -->
                            <a href="/dashboard"><img class="solutions-logo" src="images/home-office.png" alt="angogi-solutions-image"></a>
                        </div>
                    </li>
                    
                   
                </ul>
                <i id="arrow-close-menu" class="far fa-arrow-alt-circle-left"></i>
            </div> 
        
         
        </nav>

        <main  id="showcase">

            @yield('content')
            @yield('marketing')
        </main>
        <div class="contact-icons">  
            <a class="icons" href="https://api.whatsapp.com/send?phone=34618210562&text=Hola Francisco, quiero obtener mi prueba gratuita de marketing digital!">
                <i class="fab fa-facebook-messenger"></i> 
                <h6>Messenger</h6>
            </a> 
            <div class="vertical-line icons"></div>
            <a class="icons" href="https://api.whatsapp.com/send?phone=34618210562&text=Hola Francisco, quiero obtener mi prueba gratuita de marketing digital!">
                <i class="fab fa-whatsapp"></i> 
                <h6>WhatsApp</h6>
            </a>
            
           
        </div>
        <footer>
            
            <section-footer></section-footer>
           
        </footer>
    </div>
</body>
</html>
