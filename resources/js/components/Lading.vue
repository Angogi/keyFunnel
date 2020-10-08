<template>
<div >
        
               
           
        
    <div class="landing"  id="landingForm">
         <i id="landing-row" class="fas fa-angle-double-down"></i><br>   
         <i id="landing-row" class="fas fa-angle-double-down"></i><br>   
              
        <div class="check-list-pack">
            <h3>¡ Tu pack todo-inclusivo !</h3>
            <ul>
                <li><img src="/images/check-list.png" alt="chekc list">Evaluación de tu marketing actual.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Creación de landing page o One page.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Creación de anuncios y funnels de conversión.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Segmentación y lanzamiento de campaña.</li>
                <li><img src="/images/check-list.png" alt="chekc list">Prueba de una semana Gratis + reporte.</li>
                <li><img src="/images/free.png" alt="chekc list">Prórroga de otra semana totalmente gratuita.</li>
            </ul>
        </div>
       
        <div class="form-landing">
            <evaluation-form></evaluation-form>
        </div>
      
       

    </div> 
    
   
</div>  
</template>
        

<script>

export default {

}
</script>



<style scoped>
#landing-row{
    display: none;
    position: relative;
    font-size: 50px;
    color:#fff;
}
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
    display: none;
    position: relative;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    background: linear-gradient(to right, #000d5b, #01e5ee);
    margin-top: 50px;
    z-index: 50;  
    transition: all .7s;
    
    justify-content: space-around;
    align-items: center;
    width: 100%;
    height: 100%;

}

.showLandingForm{
    
    display: flex;
    left: 0px;
    top: 0;
    transition: all .7s;
    position: fixed;
}





.form-landing{
    position: relative; 
    width: 45%;
    background: #fff;
    border-radius: 15px;
    border: 2px solid #01e5ee;
    box-shadow:-8px 7px 5px 0px #003;
    border-radius:  20px;
    
}

 .check-list-pack{
    border: 2px solid #01e5ee;
    border-right-style:none ;
    box-shadow:-8px 7px 5px 0px #003;
    border-radius: 20px 0px 0px 20px;
    color:#fff;
    display: flex;
    flex-direction: column;
    padding: 20px;
    height: 70vh;
    width: 45%;
    font-size: 22px;
    
}

.landing .check-list-pack img{
    width: 20px;
    margin-right: 10px;
}




@media (max-width: 768px){

   .landing{
        flex-direction: column;
        height: inherit;
        padding: 70px 3px;
        position: fixed;
       
   }

    .showLandingForm{
    
        display: flex;
        left: 0px;
        top: 0;
        transition: all .7s;
        position: absolute;
    }

    #landing-row{
        display: inline;
    }

   .form-landing{
    position: relative; 
    width: 100%;
    background: #fff;
   
    }

    .check-list-pack{
        padding: 20px; 
        height: auto;
        width: 80%;
        font-size: medium;
        margin: 50px 0;
        margin-top: 10vh;
    }

   

  

}
   

    

</style>

