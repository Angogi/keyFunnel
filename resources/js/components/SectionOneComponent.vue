<template>
<div class="banner">
      <vue-particles
        color="#fe31fe"
        :particleOpacity="0.7"
        :particlesNumber="120"
        shapeType="circle"
        :particleSize="4"
        linesColor="#01e5ee"
        :linesWidth="2"
        :lineLinked="true"
        :lineOpacity="0.4"
        :linesDistance="150"
        :moveSpeed="4"
        :hoverEffect="true"
        hoverMode="grab"
        :clickEffect="true"
        clickMode="push"
      >
      </vue-particles>
    
  </div>
</template>

<style  scoped>

.banner{
    
    background: url(/images/background2.jpg);
    background-size: cover;
    position: absolute;
    width: 100%;
    height: 100vh;
    z-index: -10;

   
    

}

</style>