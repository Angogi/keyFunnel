<template>
    <div class="dashboard">
    
        <div  class="item card_product product" v-for="evaluation in freeEvaluations" :key="evaluation.id">
           
            <div class="product_description">
                <span class="date">{{evaluation.created_at}}</span>
                <h2>{{evaluation.name}}</h2>
                <h2>{{evaluation.email}}</h2>
                <h2>{{evaluation.phone}}</h2>
                <h2>{{evaluation.webSite}}</h2>
                <h2>{{evaluation.ads}}</h2>
                <h2>{{evaluation.socialMediaAds}}</h2>
                <h2>{{evaluation.adsAditional}}</h2>
                <h2>{{evaluation.comments}}</h2>
            </div>

            <strong><hr></strong>
            <hr>
            <hr>
           
        </div>
        
    </div>

    
    
       
       

    
  
</template>

<script>

export default {

    
    data(){
        return {
            freeEvaluations: [],
        }
    }, 
    created: function(){
        this.getEvaluations();
    },
   
    methods: {

       getEvaluations(){
           axios.get('api/evaluations').then(response =>{
               this.freeEvaluations = response.data;
           })
       }
       
        
    }
    
   
}
</script>

<style  scoped>

.dashboard{
    direction: flex;
    justify-content: space-around;
    align-items: center;
    color: #ffffff;
    margin-top: 150px;
    height: 100%;
    width: 100%;
    background:linear-gradient(to right, #000d5b, #01e5ee);  

}

</style>

