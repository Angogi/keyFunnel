<template>
    <div class="digital-marketing-showcase"  id="digital-marketing-showcase">
        <!-- <div class="check-list-dm">
            <ul>
                <li><img src="/images/check-list.png" alt="chekc list">Creamos aununcios dinamicos con impacto real.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Resultados medibles, gestionables e inteligentes.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Los datos de tus clientes llegarán de manera instantanea.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Incrementamos el número de prospectos de manera siginificativa.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Contigo de inicio a final en tu proceso de Digital Marketing.</li>
                <li><img src="/images/free.png" alt="chekc list">Obtén hoy mismo una prueba gratuita.</li>
            </ul>
        </div> -->
        <div class="swiper-container-DM">
            <div class="swiper-wrapper">
            
              <div class="swiper-slide" style="">
                  <div class="swiper-image">
                      <img src="/images/digital-marketing1.png" alt="">
                  </div> 
                  <div class="swiper-text">
                  
                  <h5>Anunciate con confianza</h5>
                  <p> Nuestro programa de marketing digital 
                      para negocios locales y autónomos. <br>
                      Te ayudamos a lograr tus objetivos comerciales en la era digital.
                  </p>
                  </div>
                  <a class="swiper-stats button-DM" href="/marketing">
                      <img src="/images/talking.png" alt="people-talking-chat">
                      <h3>¿Interesante verdad?</h3>
                      <i class="fas fa-arrow-circle-right"></i>
                  </a>
              </div>
              <div class="swiper-slide" style="">
                  <div class="swiper-image">
                      <img src="/images/logo-keyFunnel.png" alt="">
                  </div>
                  <div class="swiper-text">
                  
                  <h5>Key Funnel Strategy</h5>
                  <p> Diseñamos estrategias de marketing enfocadas a la conversión rápida. <br> 
                      Nos aseguramos de conseguir prospectos calificados día a día. <br>
                      ¡ Tu telefono no dejará de sonar !
                  </p>
                  </div>
                  <a class="swiper-stats button-DM" href="/marketing">
                      <img src="/images/talking.png" alt="people-talking-chat">
                      <h3>Quiero saber más</h3>
                      <i class="far fa-hand-point-up"></i>
                  </a>
              </div>
              <div class="swiper-slide" style="">
                  <div class="swiper-image">
                      <img src="/images/free.png" alt="">
                  </div>
                  <div class="swiper-text">
                  
                  <h5>Prueba Gratuita</h5>
                  <p> Estamos tan seguros de nuestros resultados que te
                      regalamos una prueba totalmente GRATUITA.<br>
                      ¡ Si,  GRATUITA ! 
                  </p>
                  </div>
                  <a class="swiper-stats button-DM" href="/marketing">
                      <img src="/images/talking.png" alt="people-talking-chat">
                      <h3>Quiero saber más</h3>
                      <i class="far fa-hand-point-up"></i>
                  </a>
              </div>
              <div class="swiper-slide" style="">
                  
                  <div class="swiper-image">
                      <img src="/images/evaluation.png" alt="">
                  </div>
                  <div class="swiper-text">
                  
                      <h5>Evaluación Gratuita</h5>
                      <p>Para acceder a nuestra prueba GRATUITA debemor evaluar tu situación digital,<br> 
                      ¿que dices, iniciamos hoy mismo?
                      </p>
                  </div>
                <a class="swiper-stats button-DM" href="/marketing">
                      <img src="/images/talking.png" alt="people-talking-chat">
                      <h3>Quiero saber más</h3>
                      <i class="far fa-hand-point-up"></i>
                  </a>
              </div>
                
        </div>
        <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

            <div class="close-dm-showcase" id="close-dm-showcase">

                <img src="/images/close-button.png" alt="">
                
            </div>
        </div>
       
  </div> 
  
</template> 


<style scoped>
p{
  
  font-size: 18px;
}

ul{ 
    
    list-style: none;    
}
li{
    margin: 10px;
}

 .digital-marketing-showcase{
    /* background:linear-gradient(to right, #000d5b, #01e5ee);   */
    z-index: 50;  
    transition: all .7s;
    position: fixed;
    justify-content: space-around;
    align-items: center;
    width: 0%;
    height: 0%;

}

 .show-dm-popup{
    display: flex;
    left: 0px;
    top: 0;
    width: 100%;
    height: 100%;
    transition: all .7s;
    overflow: overlay;
    
}

.close-dm-showcase{
      align-items: center;
    display: flex;
}



.close-dm-showcase img{
    width: 2.7rem;
    
    top: 100vh;
    right: 1%;
    transition: all .3s;
    background: #003;
    border-radius: 50px;
    padding: 2px;
    box-shadow: 2px 3px 5px 0px rgba(0,0,0,0.75);

}
.close-dm-showcase img:hover{
    width: 70px;
    
}

.swiper-container-DM {
    display: flex;
    width: 100%;
    height: 80vh;
    z-index: 100; 
}

.swiper-wrapper{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    position: relative;
    justify-content: space-around;
    width: 100vw;
}

.swiper-slide {
    display:grid;
    grid-template-columns: 300px;
    grid-template-rows: 200px 225px 100px;
    grid-template-areas: "image" "text" "stats";
    border-radius: 18px;
    background:white;
    box-shadow: 5px 5px 15px rgba(0,0,0,0.9);
    text-align: center;
    background-position: center;
    background-size: cover;
    margin: 10px;
    }

.swiper-image{
    grid-area: image;
    border-radius: 15px;
    background-size: contain;
    background-repeat: no-repeat;
    margin: 5px 10px;
      

}

.swiper-image img{
    margin-top: 15px;
    width: 50%;
    height: 70%;
}
.swiper-text{
    grid-area: text;
    color: #003;
    font-weight: bolder;
    margin-top: 10px;
}

    
.swiper-text p{
    
    font-size: 18px;
    font-weight: 300px;
}

.swiper-text h5{
    margin-top: 0;
    font-size: 30px;
    font-weight: bolder;
}
    
.swiper-stats{
    grid-area: stats;
    display:flex;
    flex-direction: rox;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0px 5px 7px 1px rgba(0,0,0,0.75);
    background:linear-gradient(to right, #000d5b, #01e5ee);
    color: #fff;
    font-size: large;
    padding: 10px;
    text-decoration: none;

    
}


.swiper-stats img{
    width: 45px;
    
}

.swiper-stats .stat{
    display:flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.swiper-text .type{
    font-size: 15px;
    font-weight: 300;
    text-transform: uppercase;
}
.swiper-text .value{
    font-size: 40px;
    font-weight: 500;
    text-transform: uppercase;
}

.swiper-text .love-it{
    font-size: 30px;
    
}

@media (max-width: 768px){

    .digital-marketing-showcase{
        justify-content: center;
    }

   .digital-marketing-showcase .check-list-dm{
    
        display: none;
    }

    .show-dm-popup .close-dm-showcase img{
        position: fixed;
        z-index: 10000;
        top: unset;
        bottom: 1%;
        left: 1%;



    }

    .swiper-wrapper{
      display: flex;
      flex-direction: column-reverse;
      align-items: center;
      position: relative;
      overflow: overlay;
    }

}
   

    

</style>