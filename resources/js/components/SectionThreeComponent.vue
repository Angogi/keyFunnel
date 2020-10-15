<template>
    <div class="container-section-3">
          
              
        <div class="card-S3">
            <div class="imgBox">
                <img src="/images/online-advertising.png" alt="">
                <h3>Digital Marketing</h3>
            </div>
            <div class="textBox">
                <p>Anunciate con confianza.<br>
                    Estudiamos y diseñamos estrategias de 
                    markerting digital para llegar a tu cliente ideal. 
                </p>
                 <div class="buttons-S3" id="show-dm" >Ver más  </div>
            </div>
        </div>

        <div class="card-S3">
            <div class="imgBox">
                <img src="/images/web-disign.png" alt="">
                <h3> Diseño Web</h3>
            </div>
            <div class="textBox">
                <p> Mezclamos nuestro ingenio con tecnología de vangüardia 
                    para dar a tu negocio la mejor imagen en linea. 
                </p>
                <div class="buttons-S3" id="show-wd">Ver más </div>
            </div>
        </div>

        <div class="card-S3">
            <div class="imgBox">
               
                <img src="/images/digital-solution.png" alt="">
                <h3>Soluciones Digitales</h3>
            </div>
            <div class="textBox">
                <p>Integramos y adaptamos tu negocio con las mejores 
                    herramientas de la era digital, para que logres tus objetivos.  
                </p>
                <div class="buttons-S3" >Ver más  </div>
            </div>
        </div>
        
    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>
   

.container-section-3{
    position: relative;
    width: 100%;
    display: flex;
    flex-wrap:wrap;
    justify-content: space-around;
    transition: 0.5s;
    transform: skewY(-10deg);
    
}

.container-section-3 .card-S3{
    position: relative;
    width: 300px;
    height: 400px;
    background: #ffff;
    transition: 0.5s;
    border-radius: 15px;
}

.container-section-3 .card-S3::before{
    content: '';
    position: absolute;
    top: -15px;
    left: 0;
    width: 100%;
    height: 15px;
    background:#016899;
    transform-origin: bottom;
    transform: skewX(45deg);
    transition: 0.5s;
    border: 1px solid #01e5ee;
    border-radius: 15px;
    
}

.container-section-3 .card-S3:after{
    content: '';
    position: absolute;
    top: -15px;
    left: -15px;
    width: 15px;
    height: 100%;
    background:#016899;
    transform-origin: left;
    transform: skewY(45deg);
    transition: 0.5s;
    border-bottom: 200px solid  #d9d9d9;
    border:1px solid #01e5ee;
    border-radius: 15px;
}

.container-section-3 .card-S3:hover{
    transform:translateY(-40px);

}

.container-section-3 .card-S3 .imgBox{
    position: relative;
    width: 100%;
    height: 200px;
    background:#016899;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border-radius: 15px;
}

.container-section-3 .card-S3 .imgBox img{
    max-width: 120px;
    color: whitesmoke;
    margin-top: 15px;
}

.container-section-3 .card-S3 .imgBox h3{
    position: relative;
    color:#ffff;
    margin-top: 10px;
}

.container-section-3 .card-S3 .textBox .buttons-S3{
        display: inline-block;
        margin-top: 10px;
        padding: 5px 10px;
        background: #016899;
        border-radius: 15px;
        text-decoration: none;
        color: #ffff;
        box-shadow: 5px 3px 6px -2px rgba(0,0,0,0.75);
        cursor: pointer;
}
.container-section-3 .card-S3 .textBox{
    position: relative;
    width: 100%;
    height: 200px;
    padding: 20px;
    color: #003;
    background: #ffff;
    text-align: center;
    font-size: 1.1rem;
    font-weight: bolder;
    border-radius: 15px; 
}

.container-section-3 .card-S3 .textBox::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 400px;
    background: linear-gradient(transparent, transparent, rgba(0,0,0,.1));
    transform-origin: bottom;
    transform:skewX(45deg);
    pointer-events: none;
    z-index: -1;
    border-radius: 15px;
}

.container-section-3 .card-S3:hover .textBox::before{
    transform: translateY(40px) skewX(45deg);
    filter: blur(5px);
    opacity: 0.5;
}

.container-section-3 .card-S3:nth-child(1){
    z-index: 3;
}
.container-section-3 .card-S3:nth-child(2){
    z-index: 2;
}
.container-section-3 .card-S3:nth-child(3){
    z-index: 1;
}



@media (max-width: 768px){
    
    .container-section-3{
        padding: 45px 0;
        justify-content: center;
        /* flex-wrap:wrap-reverse; */
    }

    .container-section-3 .card-S3{
        width: 250px;
        height: 350px;
        margin-bottom: 50px;
    }

    .container-section-3  .card-S3 .imgBox{
        height: 150px;
    }
    .container-section-3  .card-S3 .imgBox img{
        max-width: 100px;
    }
    .container-section-3  .card-S3 .textBox{
        height: 150px;
    }

    
}

     

</style>