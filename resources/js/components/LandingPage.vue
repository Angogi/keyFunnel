<template>
    <div class="banner">
        <header>
            <a href="#" class="logo">Watch</a>
            <div class="toggle"  v-on:click="toggle"></div>
        </header>
        <div class="content">
            <div class="contentBox">
                <h2>El futuro <br/> en tus manos </h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim quo excepturi e
                    os vero adipisci corporis accusamus tempora distinctio dolores eligendi. 
                    Eum quo ducimus quisquam eos consequatur cumque ea quaerat repellendus.
                </p>
                <a href="#" class="buyButton">Comprar</a>
            </div>
            <div class="contentImage">
                <img src="/images/bitcoin.png" alt="bitcoin-logo">
            </div>
        </div>
        <ul class="social__icons">
            <li>
                <a href="#">
                       <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a href="#">
                        <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="#">
                        <i class="fab fa-whatsapp"></i>
                </a>
            </li>
        </ul>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Store</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
           
    </div>
</template>

<script>
export default {
   methods : {

       toggle(){
            $('.toggle').toggleClass('active');
            $('.banner').toggleClass('active');
            $('.menu').toggleClass('active');
       }
   }
}
</script>

<style  scoped>

.banner{
    position: relative;
    flex-direction: column;
    width: 100vw;
    min-height: 100vh;
    padding: 0 100px;
    display: flex;
    align-items: center;
    background: #333 ;
}

.banner:before{
    content: '';
    position: absolute;
    top: 0;
    left: 180px;
    width: 400px;
    height: 320px;
    background: #016899;
    box-shadow: 2px 3px 5px 0px rgba(0,0,0,0.75);
    border-bottom-left-radius: 175px;
    transition: 1s;
    z-index: 0;
}

.banner.active:before{
    top:0;
    left: 0;
    width: 50%;
    height: 100%;
    background: #151415;
    border-bottom-left-radius: 0px;
    z-index: 2000;

}


.banner:after{
    content: '';
    position: absolute;
    bottom: 0;
    right: 180px;
    width: 400px;
    height: 160px;
    background: #000d5b;
    border-top-right-radius: 75px;
    box-shadow: 2px 1px 5px 2px rgba(0,0,0,0.75);
    transition: 1s;
    z-index: 0;
}

.banner.active:after{
    bottom:0;
    right: 0;
    width: 50%;
    height: 100%;
    background: #151415;
    border-top-right-radius: 0px;

    z-index: 2000;

}

header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 100px;
    z-index: 10000;
}

header .logo{
    font-size: 2em;
    color: #fff;
    font-weight: 700;
    text-decoration: none;
    transition: 0.5s;
    transform-origin: right;
}

 .toggle{
    position: relative;
    width: 30px;
    height: 30px;
    color: #fff;
    cursor: pointer;
    background: url(/images/menu.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 30px;
    cursor: pointer;
}

 .toggle.active{
    background: url(/images/cancel.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 30px;
}

.content{
    position: relative;
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap-reverse;
    justify-content: space-between;
    align-items: center;
    transition: 0.5s;
    transform-origin: right;
    z-index: 500;
}

.content.active{
    z-index: 1;
}

.contentBox{
    max-width: 600px;
}
.contentBox h2{
   font-size: 4em;
   font-weight: 800;
   line-height: 1em;
   color: #000033;
   margin: 5rem;
   text-transform:uppercase;
   
}
.contentBox p{
    font-size: 2em;
    font-weight: 500;
    line-height: 1em;
    color: #01e5ee;
    margin: 20px 0;

}

.buyButton{
    display:inline-block;
    border: 1px solid #ffff;
    border-radius: 15px;
    color:#ffff;
    padding:10px 30px;
    text-transform: uppercase;
    text-decoration: none;
    transition: 0.5s;
    cursor: pointer;
}

.buyButton:hover{
    letter-spacing: 4px;
    background: #fff;
    color: #111;
    font-weight: 900;
}

.contentImage img{
    max-width: 100%;
    min-width: 400px ;
}

.social__icons{
    position: absolute;
    bottom:20px;
    left: 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 3000;
    transition:0.5s;
    transform-origin: right;
}

.social__icons li{
    list-style: none;
    font-size: 45px !important;
}

.social__icons li a{
    display: inline-block;
    margin:20px;
    filter: invert(1);
    transform:scale(0.6);

}

.social__icons li a .fab{
    color: #000033 !important;
}

.menu{
    display: none;

}

.menu li{
    list-style: none;
}

.menu li a{ 
    font-size:2em;
    color: #fff;
    text-decoration: none;
}

.menu.active{
    display: flex;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    z-index: 3000;
    transition: 2s;

}

@media (max-width: 991px){
    header{
        padding: 20px 40px;
    }
}




</style>