<template>
<div >
    <div class="landing"  id="landing">

        <iframe src="https://www.youtube.com/embed/GfZGUa1LLXg" 
            frameborder="0" allow="accelerometer; autoplay; 
            encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
        
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
                    ¡ Te ayudamos a lograr tus objetivos comerciales !
                </p>
                </div>
                <a class="swiper-stats button-DM" href="/evaluation-form">
                    <img src="/images/talking.png" alt="people-talking-chat">
                    <h3>Quiero mi prueba gratuita</h3>
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
                 <a class="swiper-stats button-DM" href="/evaluation-form">
                    <img src="/images/talking.png" alt="people-talking-chat">
                    <h3>Quiero mi prueba gratuita</h3>
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
                    Si ! GRATUITA. 
                </p>
                </div>
                <a class="swiper-stats button-DM" href="/evaluation-form">
                    <img src="/images/talking.png" alt="people-talking-chat">
                    <h3>Quiero mi prueba gratuita</h3>
                    <i class="far fa-hand-point-up"></i>
                </a>
            </div>
            <div class="swiper-slide" style="">
                
                <div class="swiper-image">
                    <img src="/images/evaluation.png" alt="">
                </div>
                <div class="swiper-text">
                
                    <h5>Evaluación Gratuita</h5>
                    <p>Para acceder a nuestra prueba GRATUITA debemor evaluar tu "situación digital",<br> 
                    que dices, ¿Iniciamos hoy mismo?
                    </p>
                </div>
                <a class="swiper-stats button-DM" href="/evaluation-form">
                    <img src="/images/talking.png" alt="people-talking-chat">
                    <h3>Quiero mi prueba gratuita</h3>
                    <i class="far fa-hand-point-up"></i>
                </a>
            </div>
                
        </div>
        <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
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

      
        
    </div> 
    
    <!-- <a  href="#contact" id="contact-btn"><i class="fab fa-whatsapp"></i><h3>Hablemos !</h3></a>
    -->
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

 .landing{
    display: flex;
    position: relative;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
    width: 100%;
    background: linear-gradient(to right, #000d5b, #01e5ee);
    height: auto;
    margin-top:80px;

}

iframe{
   width: 80%;
   height: 450px;
   margin: 50px 0;
}

.landing .check-list-dm{
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

.landing .check-list-dm img{
    width: 20px;
    margin-right: 10px;
}


.swiper-container-DM {
    display: flex;
    width: 300px;
    height: 80vh;
     
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

#contact-btn{
    display: flex;
    align-items: center;
    justify-content: center;
    color:#01e5ee;
    text-decoration: none;
    padding: 0.5rem 0.5rem;
    border: 1px solid#01e5ee;
    border-radius: 50px;
    background-color: none;
    box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);
    
    font-size: 1.8rem;
    letter-spacing: 2px;
    overflow: hidden;
    transition: .5s;
    position: absolute;
    top: 120vh;
    right: 40vw;
    width: 300px;
} 

@media (max-width: 768px){

   .landing{
        flex-direction: column;
        height: auto;
        padding: 70px 3px;
        margin-top: 0px;
   }

   iframe{
       width: 300px;
       height: 225px;
       
   }

   .landing .check-list-dm{
        padding: 20px; 
        height: auto;
        width: 80%;
        font-size: medium;
        margin: 50px 0;
   }

   

    .close-dm-showcase img{
        background: transparent;
        top: unset;
        bottom: 1%;
        left: 1%;



    }

    #contact-btn{
        top: 213vh;
        right: 9vw;
    }

}
   

    

</style>

