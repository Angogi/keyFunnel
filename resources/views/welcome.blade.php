@extends('layouts/app')
@section('content')
 <section class="content-section" id="home">
    <section-one id="particles-js"></section-one>

    <div class="container-showcase" >
        <div class="container-text">
            <!-- <banner-home-page></banner-home-page> TO_DO  -->
            <h1>Lleva tu negocio al<br><span>Siguiente Nivel</span></h1> 
            <a href="#services" class="btn-banner">
                <span></span>
                <span></span>
                <span></span>
                <span></span> 
                 ¡ Sabemos cómo !
            </a>
        </div> 
        
    </div>  
</section>

<!-- <section class="content-section" id="about">
    <section-two></section-two>
</section>   -->

<section class="content-section"  id="services">
     
    <webdesign-showcase></webdesign-showcase> 
    <digital-marketing-showcase></digital-marketing-showcase>     
    <section-three></section-three>  

</section>

<!-- <section class="content-section" id="services2">
         <section-four></section-four>  
</section> -->
<section class="content-section" id="contact">
        
        <div class="hands"></div>
        <section-five></section-five>
        
</section>






@endsection 
 


           