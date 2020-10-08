<template>
    <div class="digital-marketing-showcase"  id="digital-marketing-showcase">
        <div class="check-list-dm">
            <ul>
                <li><img src="/images/check-list.png" alt="chekc list">Creamos aununcios dinamicos con impacto real.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Resultados medibles, gestionables e inteligentes.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Los datos de tus clientes llegarán de manera instantanea.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Incrementamos el número de prospectos de manera siginificativa.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Contigo de inicio a final en tu proceso de Digital Marketing.</li>
                <li><img src="/images/free.png" alt="chekc list">Obtén hoy mismo una prueba gratuita.</li>
            </ul>
        </div>
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
                    Te ayudamos a lograr tus objetivos comerciales.
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
                    <img src="/images/funnel.png" alt="">
                </div>
                <div class="swiper-text">
                
                <h5>Full Funnel Strategy</h5>
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
        </div>
        <div class="close-dm-showcase" id="close-dm-showcase">
            <img src="/images/close-button.png" alt="">
            
        </div>
  </div> 
  
</template> 

<script>
export default {
  mounted() {
      var swiper = new Swiper('.swiper-container-DM', {
      effect: 'cube',
      grabCursor: true,
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94, 
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });   
  }, 
 
  
}

</script>

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
    background:linear-gradient(to right, #000d5b, #01e5ee);  
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
    
}


.digital-marketing-showcase .check-list-dm{
    border: 2px solid #01e5ee;
    border-right-style:none ;
    box-shadow:-8px 7px 5px 0px #003;
    border-radius: 20px 0px 0px 20px;
    color:#fff;
    display: flex;
    flex-direction: column;
    padding: 20px;
    height: 80vh;
    width: 25%;
    font-size: 22px;
    
}

.digital-marketing-showcase .check-list-dm img{
    width: 20px;
    margin-right: 10px;
}

.close-dm-showcase img{
    width: 2.7rem;
    position: absolute;
    top: 60px;
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
    width: 300px;
    height: 80vh;
    z-index: 100; 
}

.swiper-slide {
    display:grid;
    grid-template-columns: 300px;
    grid-template-rows: 32vh 32vh 10vh;
    grid-template-areas: "image" "text" "stats";
    border-radius: 18px;
    background:white;
    box-shadow: 5px 5px 15px rgba(0,0,0,0.9);
    text-align: center;
    background-position: center;
    background-size: cover;
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
    width: 70%;
    height: 90%;
}
.swiper-text{
    grid-area: text;
    color: #003;
    font-weight: bolder;
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
    font-size: xx-large;
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

    .close-dm-showcase img{
        background: transparent;
        top: unset;
        bottom: 1%;
        left: 1%;



    }

}
   

    

</style>