
<template>

 
  <div class="container" >
    <h3>Listado de contactos </h3> 
    
     
    <b-table    :items="contacts"
                sticky-header 
                head-variant="light" 
                striped 
                hover 
                bordered>
        
    </b-table>
    
  </div>

</template>
<script>

export default {

    
    data(){
        return {
            
            contacts:[],
        }
    }, 
   
    created: function(){
        this.getContacts();
    },
   
    methods: {

      

       getContacts(){
           axios.get('api/contacts').then(response =>{
               this.contacts = response.data;
              
           })
       },

       
     
       
        
    }
    
   
}
</script>

<style  scoped>



.table-container{
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    color: #003;
    margin: 150px 40px;
    height: 100%;
    width: 90%;
    font-weight: bolder;
    

}

@media (max-width: 768px){
    .table-container{
        display: block;
        margin:70px 20px;
    }
}



</style>

