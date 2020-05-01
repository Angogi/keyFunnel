<template>
    <div class="main-info">
        <div class="text">
            <h1>
                <span>H</span>
                <span class="m-left">i</span>
                <span class="m-left">,</span>
                <br>
                <span>I</span>
                <span class="m-left">'</span>
                <span class="m-left">m</span>
                <span class="name">A</span>
                <span class="m-left name">n</span>
                <span class="m-left name">d</span>
                <span class="m-left name">r</span>
                <span class="m-left name">é</span>
                <span class="m-left name">s</span>
                <span class="m-left">,</span>
                <br>
                <span>W</span>
                <span class="m-left">e</span>
                <span class="m-left">b</span>
                <span class="name">D</span>
                <span class="m-left name">e</span>
                <span class="m-left name">v</span>
                <span class="m-left name">e</span>
                <span class="m-left name">l</span>
                <span class="m-left name">o</span>
                <span class="m-left name">p</span>
                <span class="m-left name">e</span>
                <span class="m-left name">r</span>
                <span style="font-family:cursive">&</span>
                <br>
                <span>D</span>
                <span class="m-left">i</span>
                <span class="m-left">g</span>
                <span class="m-left">i</span>
                <span class="m-left">t</span>
                <span class="m-left">a</span>
                <span class="m-left">l</span>
                <span class="name">M</span>
                <span class="m-left name">a</span>
                <span class="m-left name">r</span>
                <span class="m-left name">k</span>
                <span class="m-left name">e</span>
                <span class="m-left name">t</span>
                <span class="m-left name">e</span>
                <span class="m-left name">r</span>
               
               

            </h1>
            <p>HTML / CSS / SCSS / PHP / LARAVEL </p>
            <p>JAVASCRIPT / JQUERY / VUEjs / SOLIDITY </p>
            <p>FACEBOOK <span style="font-family:cursive">&</span> INSTAGRAM ADS / GOOGLE ADS</p>
            <div class="images-ads">
                
                <img src="/images/social-media.png" alt="digital marketing">
                <img src="/images/marketing.png" alt="digital marketing">
                <img src="/images/mobile-store.png" alt="digital marketing">
                <img src="/images/discount.png" alt="digital marketing">
                <img src="/images/mobile-phone.png" alt="digital marketing">
                <img src="/images/launch-business.png" alt="digital marketing">
                <img src="/images/coin.png" alt="digital marketing">
                <img src="/images/funnel.png" alt="digital marketing">
                <img src="/images/dashboard.png" alt="digital marketing">
                <img src="/images/pixel-img.png" alt="digital marketing">
                <img src="/images/computer.png" alt="digital marketing">
                <img src="/images/bitcoin1.png" alt="digital marketing">
                            
                
                
            </div>
            
        </div>
        <div class="box">
            <div class="spin-container">
                <div class="shape">
                <div class="bd"></div>
                </div>
            </div>
            <a  href="#contact" id="contact-btn"><i class="fab fa-whatsapp"></i><h3>Hablemos !</h3></a>
        </div>
    </div>

</template>

<style  scoped>

.main-info{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    height: 100vh;
    background:#333 ;

}

.text{
       
    width: 46%;
}

.text h1{
    color: #fff;
    font-size: 3rem;
    cursor: context-menu;
    font-weight: bold;

}

.text span{
    display: inline-block;
}
.images-ads{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    flex-wrap: wrap;
    width: 70%;
}

.images-ads img{
    width: 45px;
    margin:10px 10px;
    transition: all 0.05s;
}

.images-ads img:hover{
    background: #003;
    border-radius: 15px;
}

span:hover{
    color: #01e5ee;
    transition: all .5s;
    
}

span.name{
    color: #01e5ee;
}

span.m-left{
    margin-left: -10px;
}

.text p{
    letter-spacing: 3px;
    word-spacing: 10px;
    font-size: .8rem;
    color: #01e5ee;
    font-weight: 700;
}



.box {
    width: 70vmin;
    height: 70vmin;
    border: 1px dashed #01e5ee;
    position: relative;
   
   
  }

  .box a{

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
    top: 5vh;
    font-size: 1.8rem;
    letter-spacing: 2px;
    position: relative;
    overflow: hidden;
    transition: .5s;
    width: 100%;
    

}

.box a i{
    font-size: inherit;
    margin-right: 8px;
}

.box a:hover{
    background:#01e5ee ;
    color: #fff;
    box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);
}
  
  .spin-container {
    width: 100%;
    height: 100%;
    animation: spin 12s linear infinite;
    position: relative;
    
  }
  
  .shape {
    width: 100%;
    height: 100%;
    transition: border-radius 1s ease-out;
    border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
    animation: morph 8s ease-in-out infinite both alternate;
    position: absolute;
    overflow: hidden;
    z-index: 5;
  }
  
  .bd {
    width: 142%;
    height: 142%;
    position: absolute;
    left: -21%;
    top: -21%;
    background: url(/images/profile.png)  no-repeat;
    background-size: 80%;
    background-position: center center;
    display: flex;
    color: #003;
    font-size: 5vw;
    font-weight: bold;
    align-items: center;
    justify-content: center;
    text-align: center;
    text-transform: uppercase;
    animation: spin 12s linear infinite reverse;
    opacity: 1;
    z-index: 2;
  }
  
  @keyframes morph {
    0% {border-radius: 40% 60% 60% 40% / 60% 30% 70% 40%;} 
    100% {border-radius: 40% 60%;} 
  }
  
  @keyframes spin {
    to {
      transform: rotate(1turn);
    }
  }



@media (max-width: 768px){

     .main-info{
        flex-direction: column;
        height: auto;
    }

    .text{
        width: 90%;
    }

    .images-ads{
        width: 100%;
    }

    .box a{
        top: auto;
        margin: 20px 0px;
           
    }
    

    
} 

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
    
    

    .box{
        width: 70vmin;
        height: 70vmin;
        top: 3vh;
        margin-bottom: 140px;
    }

    
    .text h1{
        font-size: 2.3rem;
        
    }

    .text p{
        letter-spacing: 3px;
        word-spacing: 3px;
        font-size: .6rem;
    }

    
    
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {

    
    .box{
        width: 50vmin;
        height: 50vmin;
        margin-bottom: 100px;
    }

    
  
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
  
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {

   
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
  
}



</style>