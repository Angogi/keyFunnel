@extends('layouts/appWebinar')
@section('webinar')

<div class="container-landing">
    <div class="webinar-form" id="webinar-form">
        <div class="banner-webinar-form">
            <p>¿Sabías que puedes usar algo tan habitual como el WhatsApp 
                para recibir cada día peticiones de personas que 
                soliciten tus productos y/o servicios?  
            </p>
        </div>
        <div class="imagen-container"> 
            <img src="images/WhatsApp-Business-landing.jpg" alt=""> 
        </div> 
        <div class="banner-webinar-form">
            <p>¿No dispones del tiempo o los conocimientos para lograrlo,
                 pero sabes que vamos a hacer que suceda? 
                <br> <br> Esta presentación es para ti. <br> <br>
                Las primeras 20 personas que vean la presentación recibirán 
                dos semanas de prueba totalmente gratis en las que día a día recibirán 
                nuevas solicitudes de clientes vía WathsApp ! 
            </p>
        </div>
        <webinar-register-form></webinar-register-form>
    </div>
    
    <div class="video-source">
        <video  id="webinar-video" class="webinar-video">
            <source src="/storage/videos/presentacion.mp4" type="video/mp4">    
        </video>      
        
        
        <button class="play-button" id="btn-play"><i class="far fa-play-circle"></i>Play</button>
    </div>
 
    <p id="timer">_____</p>
    
</div>
<div class="goHome" id="goHome">
    <div class="card" style="width: 18rem;">
        <a href="/marketing" class="btn btn-primary">Ir a KeyFunnel</a>
        <img class="card-img-top" src="images/funnel.png" alt="Card image cap">
        <div class="card-body">
            <p class="card-text">Tu información ha sido enviada correctamente, 
                enviaremos los detalles al email que nos proporcionaste.</p> 
        </div>
    </div>
   
</div>

<landing ></landing>








@endsection 