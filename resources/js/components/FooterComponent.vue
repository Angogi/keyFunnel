<template>
    <div class="foot-container">
        <div class="social-foot-container">
            <ul>
                <li>
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span class="fa fa-facebook"></span>
                    </a>
                </li>
                <li>
                    <a href="https://api.whatsapp.com/send?phone=34618210562&text=Hola Francisco, quiero obtener mi prueba gratuita de marketing digital!">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span class="fa fa-whatsapp"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span class="fa fa-linkedin"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span class="fa fa-instagram"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span class="fa fa-github"></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="text-foot-container">
            <h3>© 2020 Todos los derechos reservados</h3><br>
            <h4>KeyFunnel marketing & digital solutions</h4>
        </div>
    </div>
</template>

<style  scoped>

    .foot-container{
        display: flex;
        flex-direction: column;
        min-height: 50vh;
        width: 100%;
        background: #003;
        border-top: 2px solid  #01e5ee;
        align-items: center;
    }
    .social-foot-container{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 50vh;
        background: #003;
       
    }

    .social-foot-container ul{
        position: relative;
        display: flex;
        transform-style: preserve-3d;
        transform: rotate(-25deg) skew(25deg);
       
    }

    .social-foot-container li{
        position: relative;
        list-style: none;
        width: 60px;
        height: 60px;
        margin: 0 10px;
         
    }

    .social-foot-container li::before{
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 100%;
        height: 10px;
        background: #2a2a2a;
        transform-origin: top;
        transform: skewX(-41deg);
     
    }
    .social-foot-container li::after{
        content: '';
        position: absolute;
        top: 0;
        left: -9px;
        width: 9px;
        height: 100%;
        background: #2a2a2a;
        transform-origin: right;
        transform: skewY(-49deg);
     
    }

    .social-foot-container li span{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex !important;
        justify-content: center;
        align-items: center;
        background: #333;
        font-size: 30px !important;
        transition: 0.2s;
    }

    .social-foot-container li:hover span{
        z-index: 1000;
        transition: 0.5s;
        color: #ffffff;
        box-shadow: -1px 1px 1px rgba(0,0,0,0.05);
    }

    .social-foot-container li:hover span:nth-child(5){
        transform: translate(40px, -40px);
        opacity: 1;
    }
    .social-foot-container li:hover span:nth-child(4){
        transform: translate(30px, -30px);
        opacity: 0.8;
    }
    .social-foot-container li:hover span:nth-child(3){
        transform: translate(20px, -20px);
        opacity: 0.6;
    }
    .social-foot-container li:hover span:nth-child(2){
        transform: translate(10px, -10px);
        opacity: 0.4;
    }
    .social-foot-container li:hover span:nth-child(1){
        transform: translate(0px, 0px);
        opacity: 0.2;
    }

    .social-foot-container li:nth-child(1):hover span{
        background: #3b5999 ;
    }
    .social-foot-container li:nth-child(2):hover span{
        background: #25D366 ;
    }
    .social-foot-container li:nth-child(3):hover span{
        background: #0077B5 ;
    }
    .social-foot-container li:nth-child(4):hover span{
        background: #e4405f ;
    }
    .social-foot-container li:nth-child(5):hover span{
        background: #000 ;
    }

    .text-foot-container{
        color: #333;
        text-align: center;
        width: 80%;
    
    }

    .text-foot-container h3{
        margin: -25px;
        font-weight: bolder;
    }

    @media (max-width: 768px){
    .social-foot-container li{
        position: relative;
        list-style: none;
        width: 50px;
        height: 50px;
        margin: 0 7px;
         
    }
     .text-foot-container{
        
        margin-bottom: 45px;
    }
}



</style>
