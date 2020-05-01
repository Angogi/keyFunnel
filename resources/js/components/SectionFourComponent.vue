<template>
    <div class="container-S4">
        <div class="card-S4" id="card-S4">
            <div class="imgBox" data-text="Web-App">
                <img src="/images/code.png" alt="">
            </div>
            <div class="content-text">
                <h3> Web App</h3>
                <p>Diseñamos a medida no solo un sitio web, sino 
                    toda la maquinaria digital que requieres para 
                    tener todo bajo control. </p>
                <a href="#">Ver más !</a>
            </div>
        </div>
      
       
        <div class="card-S4">
            <div class="imgBox" data-text="Blockchain">
                 <img src="/images/cryptocurrency.png" alt="">
            </div>
            <div class="content-text">
                <h3>  Blockchain Solutions  </h3>
                <p>Integramos tu sitio web con metodos de pago descentralizados como Bitocoin y Ethereum. </p>
                <a href="#">Ver más !</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted(){
    $(document).ready(function(){
    var $services2 = $('#services2');
    var $card = $('.card-S4');
    $services2.waypoint(function(direction){
        if(direction == 'down'){
            $card.addClass('way-point-effect');
        }
        else{
            $card.removeClass('way-point-effect');
        }
    }, {offset: '50%'});

  })
}
}
</script>

<style  scoped>
    .container-S4{
        position: relative;
        width: 1000px;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        margin: 20px;

    }

    .container-S4 .card-S4{
        position: relative;
        height: 0px;
        background: #d9d9d9;
        display: flex;
        width: 0%;
        margin: 30px 0;
        border-radius: 15pc;
        border: 2px solid #a23bfe;
        opacity: 0;
        transition: all 1s ease-in;
    
            
    }

    .container-S4 .way-point-effect{
        opacity: 1;
        width: 45%;
        height: 250px;
       
    }

    .container-S4 .card-S4 .imgBox{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #333;
        color: #fe31fe;
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        transition: 0.5s ease-in-out;
        border-radius: 15pc;
    }
   

    .container-S4 .card-S4:hover .imgBox{
        width: 150px;
        height: 150px;
        left: -75px;
        top: calc(50% - 75px);
        transition: 0.5s ease-in-out;
        background: #016899;
        color:#fff;
        border-radius: 50%;
        border:1px solid #333;
        box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);

    }

    .container-S4 .card-S4 .imgBox::before{
        content: attr(data-text);
        position:absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        text-align: center;
        font-size: 6em;
        color: rgba(255, 255, 255, .05);
        font-weight: 700;
    }

    .container-S4 .card-S4 .imgBox img{
        max-width: 100px;
        transition: 0.5s ease-in-out;
    }

    .container-S4 .card-S4:hover .imgBox img{
        max-width: 75px;
    }

    .container-S4 .card-S4 .content-text{
        position: absolute;
        right: 0;
        width: calc(100% - 75px);
        height: 100%;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        font-size: 1.3rem;
    }

    .container-S4 .card-S4 .content-text h3{
        margin-bottom: 5px;
        font-size: 2.5rem;
        font-weight: bolder;

    }

    .container-S4 .card-S4 .content-text a{
        display: inline-block;
        margin-top: 10px;
        padding: 5px 10px;
        background: #333;
        border-radius: 15px;
        text-decoration: none;
        color: #fe31fe;
        box-shadow: 5px 3px 6px -2px rgba(0,0,0,0.75);

    }

    @media (max-width: 992px){
        .container-S4{
            width: 80%;
            flex-direction: column;
            align-items: center;

        }

        .container-S4 .card-S4{
            width: 400px;

        }
    }

     @media (max-width: 768px){
          .container-S4 .card-S4{
           max-width: 300px;
           flex-direction: column;
           height: auto;
            border-radius: 0;

        }

        .container-S4 .card-S4 .imgBox{
            position: relative;
            border-radius: 0;


        }

        .container-S4 .card-S4 .imgBox,
        .container-S4 .card-S4:hover .imgBox{
            width: 100%;
            height: 200px;
            left:0;
            border-radius: 0;


        }

        .container-S4 .card-S4 .imgBox img,
        .container-S4 .card-S4:hover .imgBox img{
            max-width: 100px;
            border-radius: 0;

        }

        .container-S4 .card-S4 .content-text{
            position: relative;
            width: 100%;

        }


     }


</style>

