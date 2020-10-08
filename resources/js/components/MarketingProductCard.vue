<template>
<div class="cards-container-s4">
    <div class="cardS4-content" id="cardS4">
        
        <div class="cardS4">
        
            <figure class="frontCard">
                <img src="images/pack-basico.png" alt="">
                <h2 align="center">PACK BÁSICO</h2>
            
                <div class="cardS4-buttons">
                    <label for="change" class="button"><i class="fa fa-shopping-cart fa-2x"></i></label>
                    <label for="cart" class="button"><i class="fas fa-money-bill fa-2x"></i></label>
                </div>
            </figure>
            <figure class="backCard">
                
                
                 <h2 align="center"> ¡ Tu Pack Básico !</h2>
                
                <ul>
                        <li><img src="/images/check-list.png" alt="chekc list">Anuncio B.M.</li>
                        <li><img src="/images/check-list.png" alt="chekc list">Funnel</li>
                        <li><img src="/images/check-list.png" alt="chekc list">Lanzamiento campaña</li>
                    
                </ul>

                <h2 align="center">100‎€ / mes</h2>
               
                <button class="button">Comprar</button>
            </figure>
        
        </div> 
    </div>
    <div class="cardS4-content" id="cardS4">
        
        <div class="cardS4">
        
            <figure class="frontCard">
                <img src="images/pack-premium.png" alt="">
                <h2 align="center">PACK TODO-INCLUSIVO</h2>
            
                <div class="cardS4-buttons">
                    <label for="change" class="button"><i class="fa fa-shopping-cart fa-2x"></i></label>
                    <label for="cart" class="button"><i class="fas fa-money-bill fa-2x"></i></label>
                </div>
            </figure>
            <figure class="backCard">
                              
                
                <h2 align="center"> ¡ Tu pack <br> Todo-Inclusivo !</h2>
                
               <ul>
                    <li><img src="/images/check-list.png" alt="chekc list">Evaluación</li>
                    <li><img src="/images/check-list.png" alt="chekc list">Creación Landing o OnePage</li>
                    <li><img src="/images/check-list.png" alt="chekc list">Anuncio B.M.</li>
                    <li><img src="/images/check-list.png" alt="chekc list">Funnels</li>
                    <li><img src="/images/check-list.png" alt="chekc list">Lanzamiento campaña</li>
                </ul>

                <h2 align="center">250€ / mes</h2>
               
                <button class="button">Comprar</button>
            </figure>
        
        </div> 
    </div>
     
</div>
</template>

<style scoped>


 .cards-container-s4{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
    
    width: 90%;
    margin: 10px 15px;
}

.frontCard img{
    width: 100%;
}


.cardS4-content{
    
    height: 450px;
    width: 333px;
    margin-bottom: 100px;
    
    
}


.cardS4{
    width: 100%;
    height: 100%;
   
    transition: transform 0.5s ease-in-out;
    transform-style: preserve-3d;
    margin-bottom: 15px;

}

.cardS4-content:hover .cardS4{
    transform: rotateY(180deg);
}

.cardS4 figure{
    display: grid;
    width: 100%;
    height: 100%;
    position: absolute;
    border-radius: 18px;
    box-shadow: 0px 5px 7px 1px rgba(0,0,0,0.75);
    
}

.cardS4 .frontCard{
    background: #ffffff;
    color: #f9c259;
}
.cardS4 .frontCard h2{
    background: #003;
    align-self: flex-end;
    font-size: 2rem;
}
.cardS4 .backCard{
    background: #003;
     color: #f9c259;
    transform: rotateY(180deg);
    padding: 20px;

}

.cardS4 .backCard img{
     width: 45px;
}

.cardS4 .backCard ul{
   
    list-style: none;
    font-size: 18px;
}
.cardS4 .backCard button{
    border-radius: 18px;
    color: #f9c259;
    font-size: 25px;
    font-weight: bold;
}

.cardS4-buttons{
    display: flex;
    justify-content: space-around;
    align-items: center;
    font-size: 25px;
}




 
</style>

  