<template>
    <div class="webdesign-showcase"  id="webdesign-showcase">
        <div class="check-list-wd">
            <ul>
                <li><img src="/images/check-list.png" alt="chekc list">Diseños elegantes y pensados para tu sector.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Responsive, adapables a caulquier dispositivo.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Integración con metodos de pago tradicionales y/o Crypto.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Desarrollo Web preparados para ser integrados con social media.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Diseños Mobile First.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Hosting y dominio incluidos.</li>
            </ul>
        </div>
        <div class="swiper-container-section3">
            <div class="swiper-wrapper">
            
            <div class="swiper-slide" style="">
                <div class="swiper-image special-class-image">
                    <img src="/images/design.png" alt="design-from-digital-pencil">
                </div> 
                <div class="swiper-text">
                
                <h5>Diseñamos para ti</h5>
                <p> Sabemos lo imprescindible que es la presencia Online para tu empresa, 
                    esto requiere diseños elegantes y atractativos, pero aún más importante, 
                    necesitas un sitio web que verdaremente venda.
                </p>
                </div>
                <div class="swiper-stats">
                <div class="stat">
                    <div class="love-it"><i class="far fa-heart"></i></div>
                    <div class="type">¡ Lo quiero !</div>
                </div>
                <div class="stat">
                    <div class="value">Desde</div>
                    <div class="type">299 EUR</div>
                </div>
                <div class="stat">
                    <div class="cotizar"><i class="fas fa-arrow-circle-right"></i></div>
                    <div class="type">Cotizar</div>
                </div>
                </div>
            </div>
            <div class="swiper-slide" style="">
                <div class="swiper-image">
                    <img src="/images/one-page.png" alt="">
                </div>
                <div class="swiper-text">
                
                <h5>One Page</h5>
                <p> Diseños especiales y de vanguardia para tu marca personal. 
                    El sitio web perfecto para Coaches, Networkers y autónomos. 
                </p>
                </div>
                <div class="swiper-stats">
                <div class="stat">
                <div class="love-it"><i class="far fa-heart"></i></div>
                    <div class="type">¡ Lo quiero !</div>
                </div>
                <div class="stat">
                    <div class="value">Desde</div>
                    <div class="type">199 EUR</div>
                </div>
                <div class="stat">
                    <div class="cotizar"><i class="fas fa-arrow-circle-right"></i></div>
                    <div class="type">Cotizar</div>
                </div>
                </div>
            </div>
            <div class="swiper-slide" style="">
                <div class="swiper-image">
                    <img src="/images/online-shop.png" alt="">
                </div>
                <div class="swiper-text">
                
                <h5>Tienda Online</h5>
                <p>Despreocúpate de la presencia Online de tu tienda y 
                    ocupate de lo que haces con pasión, ¡ hacer crecer tu negocio ! <br>
                    Diseños modulares fantasticos y que verdaremente venden. 
                </p>
                </div>
                <div class="swiper-stats">
                <div class="stat">
                    <div class="love-it"><i class="far fa-heart"></i></div>
                    <div class="type">¡ Lo quiero !</div>
                </div>
                <div class="stat">
                    <div class="value">Desde</div>
                    <div class="type">549 EUR</div>
                </div>
                <div class="stat">
                    <div class="cotizar"><i class="fas fa-arrow-circle-right"></i></div>
                    <div class="type">Cotizar</div>
                </div>
                </div>
            </div>
            <div class="swiper-slide" style="">
                <div class="swiper-image">
                    <img src="/images/landing-page.png" alt="">
                </div>
                <div class="swiper-text">
                
                <h5>Landing Page</h5>
                <p>Esta será tu primera parada para un negocio de éxito en linea. <br>
                    Una manera simple y elegante de atraer a tus clientes. 
                </p>
                </div>
                <div class="swiper-stats">
                <div class="stat">
                    <div class="love-it"><i class="far fa-heart"></i></div>
                    <div class="type">¡ Lo quiero !</div>
                </div>
                <div class="stat">
                    <div class="value">Desde</div>
                    <div class="type">120 EUR</div>
                </div>
                <div class="stat">
                    <div class="cotizar"><i class="fas fa-arrow-circle-right"></i></div>
                    <div class="type">Cotizar</div>
                </div>
                </div>
            </div>
            <div class="swiper-slide" style="">
                <div class="swiper-image">
                    <img src="/images/together.png" alt="">
                </div>
                <div class="swiper-text">
                
                <h5>¿Con una idea genial?</h5>
                <p>No hay problema, déjanoslo saber.<br>
                    Diseñamos software a tu medida.<br>
                    ¡ Hagámoslo realidad juntos ! 
                
                </p>
                </div>
                <div class="swiper-stats">
                <div class="stat">
                    <div class="love-it"><i class="fas fa-lightbulb"></i></div>
                    <div class="love-it"><i class="far fa-heart"></i></div>
                </div>
                <div class="stat">
                    <div class="love-it"><i class="far fa-heart"></i></div>
                    <div class="love-it"><i class="fas fa-lightbulb"></i></div>
                </div>
                <div class="stat">
                    <div class="cotizar"><i class="fas fa-arrow-circle-right"></i></div>
                    <div class="type">Contactar</div>
                </div>
                </div>
            </div>
        
                
            </div>
        <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <div class="close-wd-showcse" id="close-wd-showcase">
            <img src="/images/close-button.png" alt="">
        </div>
  </div> 
  
</template>

<script>
export default {
  mounted() {
      var swiper = new Swiper('.swiper-container-section3', {
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
  
    font-size: 20px;
}

ul{ 
    
    list-style: none;    
}
li{
    margin: 10px;
}

 .webdesign-showcase{
    display: flex;
    flex-direction: row;
    background:linear-gradient(to right, #000d5b, #01e5ee);  
    z-index: 50;  
    transition: all .7s;
    position: fixed;
    justify-content: space-around;
    align-items: center;
    width: 0%;
    height: 0%;
    

}

 .show-wd-popup{
    left: 0px;
    top: 0;
    width: 100%;
    height: 100%;
    
    
}

.webdesign-showcase .check-list-wd{
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

.webdesign-showcase .check-list-wd img{
    width: 20px;
    margin-right: 10px;
}


.close-wd-showcse img{
    width: 2.7rem;
    position: absolute;
    top: 60px;
    right: 10px;
    transition: all .3s;
    background: #003;
    border-radius: 50px;
    padding: 2px;
    box-shadow: 2px 3px 5px 0px rgba(0,0,0,0.75);

}
.close-wd-showcse img:hover{
    width: 70px;
    

}


.swiper-container-section3 {
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
      box-shadow: -5px 5px 15px rgba(0,0,0,0.9);
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

    .special-class-image{
        margin-top: 0;
        width: 100%;
        height: auto;
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
        display:grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows:1fr;
        box-shadow: 0px 5px 7px 1px rgba(0,0,0,0.75);
        background:linear-gradient(to right, #000d5b, #01e5ee);
        color: #fff;
        font-size: medium;
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

    .webdesign-showcase{
        justify-content: center;
    }
    
    .webdesign-showcase .check-list-wd{
    
        display: none;
    }

    .close-wd-showcse img{
        background: transparent;
        top: unset;
        bottom: 1%;
        left: 1%;

    }


}
   

    

</style>