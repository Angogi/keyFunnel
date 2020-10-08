@extends('layouts/app')
@section('marketing')

<div class="marketing-page-container">
    <section>
        <div class="container-section " id="s1">
            <!-- <img src="images/marketing-atraccion.png" alt=""> -->
            <div class="titleKeyFunnel">
                <h1>Nuestra meta </h1>
            </div>  
            <div class="cardS1">
                
                <span>¡ Que obtengas nuevos clientes para tu negocio cada día ! </span>
                
                
            </div>
            
        </div>
    </section>
    <section>
        <div class="container-section " id="s2">
        <div class="section-title">
                <h2> ¿Que hacemos? </h2>
            </div>
           <div class="cardS2">
               
               <div class="card-text">
                   <h2>Digitalizar <br> tu negocio</h2>
                   <p>Introducimos tu producto y/o servicio en la era digital</p>
               </div>
             
           </div>
           <div class="cardS2">
               
               <div class="card-text">
                   <h2>Dar a conocer <br>  tu marca</h2>
                   <p>Hacemos que tu negocio tenga amplia visibilidad
                      en las principales plataformas digitales </p>
               </div>
               
           </div>
           <div class="cardS2">
            
               <div class="card-text">
                   <h2>Nuevos clientes <br> cada día</h2>
                   <p>Conseguimos de manera efectiva que día tras día recibas <br> nuevos leads</p>
               </div>
             
           </div>
            
        </div>
    </section>
    <section>
        <div class="container-section " id="s3">
           
            <div class="section-title">
                <h2> ¿ Cómo lo hacemos ? </h2>
                <span>Mediante un metodo sencillo pero efectivo :</span>
            </div>
            <div class="cards-container-s3">  

                <div class="cardS3" id="card1-s3">
                    <div class="imgBox image-card-S3-1">
                        
                    </div>
                    <div class="tx-cont">
                        <h1>¡ CAPTA !</h1>
                    </div>
                </div>
                
                <div class="cardS3" id="card2-s3" >
                    <div class="imgBox image-card-S3-2">
                        
                    </div>
                    <div class="tx-cont">
                        <h1>¡ CAPTURA !</h1>
                    </div>
                </div>
            
                <div class="cardS3" id="card3-s3">
                    <div class="imgBox image-card-S3-3">
                        
                    </div>
                    <div class="tx-cont">
                        <h1>¡ CONTACTA  !</h1>
                    </div>
                   
                </div>

            </div>
             <div class="container-video-s3">
                <video src="/storage/videos/evaluación_gratuita.mp4" controls ></video> 
             </div>
        </div>
    </section>
    <section>
        <div class="container-section" id="s4">
            
            <div class="section-title">
                    <h2> Nuestros productos </h2>
                    <span> Ofrecemos packs de marketing digital a tu medida </span>
            </div>

            
            <marketing-product-card></marketing-product-card>
          
          
        </div>
    </section>
    <!-- <section>
        <div class="container-section" id="s5">
            <div class="section-title">
                <h2> ¡ Hazte premium ! </h2>
            </div>
        </div>
    </section> -->
    <section>
        <evaluation-form></evaluation-form>
    </section>
   
    
   
    
</div>

@endsection