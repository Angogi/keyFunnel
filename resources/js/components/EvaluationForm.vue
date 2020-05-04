
<template>
    <div class="container">
        
        <h2><strong>Evaluación Gratuita</strong></h2>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="card-body">
            <form @submit="formSubmit" id="register_form">
               <fieldset class="fieldset">
                    <h3><strong>Nombre:</strong></h3>
                    <input id="name" type="text" class="form-control" v-model="name">
                    <h3><strong>Email:</strong></h3>
                    <input id="email" type="email" class="form-control" v-model="email" placeholder="Tu mejor email !">
                    <h3><strong>Numero movil:</strong></h3>
                    <input id="phone" type="number" class="form-control" v-model="phone">
                    <input type="button" class="next-form buttons" value="Next"/>
               </fieldset>
               <fieldset class="fieldset">
                    <h3>Gracias por tu confiar tu información personal con nosotros, <strong>{{name}}.</strong></h3>
                    <h4>Ahora necesitaremos alguna información sobre tu negocio.</h4>

                    <h3><strong>Sitio Web</strong></h3>
                    <input type="text" class="form-control" v-model="webSite" placeholder="wwww...">

                   
                        <h3><strong>¿Has hecho publicidad en redes sociales y/o google?</strong></h3>
                    <div class="adsDoing">
                        
                        <b-form-radio v-model="ads" name="¿ads?" value="Si"><h4>Si<i class="fas fa-smile-wink"></i></h4></b-form-radio>
                        <b-form-radio v-model="ads" name="¿ads?" value="No"><h4>No<i class="fas fa-sad-cry"></i></h4></b-form-radio>
                        <!-- <input class="ads" type="radio"  name="Si" value="Si"  v-model="ads"> <h3>Si <i class="fas fa-smile-wink"></i></h3>
                        <input class="ads" type="radio"  name="No" value="No"  v-model="ads"> <h3>No <i class="fas fa-sad-cry"></i></h3> -->
                    </div>

                    <b-form-checkbox-group class="check-box-ads" v-if="ads == 'Si'" v-model="socialMediaAds" name="social media ads">
                        <b-form-checkbox value="facebook" name="socialMediaAds[]"><h4>facebook</h4></b-form-checkbox>
                        <b-form-checkbox value="instagram" name="socialMediaAds[]"><h4>Instagram</h4></b-form-checkbox>
                        <b-form-checkbox value="google_ads" name="socialMediaAds[]"><h4>Google ads</h4></b-form-checkbox>
                        <b-form-checkbox value="youtube" name="socialMediaAds[]"><h4>Youtube</h4></b-form-checkbox>
                        <b-form-checkbox value="otra" name="socialMediaAds[]"><h4>Otra</h4></b-form-checkbox>
                    </b-form-checkbox-group>

                   <div v-if="socialMediaAds.includes('otra')">
                       
                        <strong>¿Cual otra?</strong>
                        <input type="text" class="form-control" v-model="adsAditional" placeholder="¿...?">
                    </div>
                     <!-- <div class="buttons-container"> -->
                        <input type="button" name="previous" class="previous-form buttons" value="Previous" />
                        <input type="button" name="next" class="next-form buttons" value="Next" />
                    <!-- </div>     -->
                </fieldset>
               <fieldset class="fieldset"> 
                    <h4>¿ Es correcta tu información de contacto, {{name}} ?</h4>
                    
                    <strong> Tu correo electrónico es : {{email}}</strong>
                    <br>
                    <strong>Tu número de contacto es : {{phone}}</strong>
                    <br> 
                    <strong> Tu sitio web es : {{webSite}}</strong>
                    <br>
                    <br>
                    <div class="comments">
                        <h5><strong>Algo adicional que nos quieras comentar</strong></h5>
                        <textarea rows="5" cols="50" type="text"  v-model="comments"> </textarea>
                    </div>
                    <!-- <div class="buttons-container"> -->
                        <input type="button" name="previous" class="previous-form buttons" value="Previous" />
                        <input type="submit" name="submit" class="submit buttons" value="Submit" />
                    <!-- </div> -->
               </fieldset>
              
            </form>

            <div class="alert alert-success hide"></div>
           
        </div>

        
                
    </div>
</template>
     
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {

                name: '',
                email: '',
                phone:'',
                webSite:'',
                ads: '',
                socialMediaAds:[],
                adsAditional:'',
                comments:'',
                output:''
                
            };

        
        },
        methods: {
            formSubmit(e) {


                

                e.preventDefault();
               
                let currentObj = this;

                axios.post('api/free-evaluations', {
                    name: this.name,
                    email: this.email, 
                    phone: this.phone,
                    webSite: this.webSite,
                    ads: this.ads,
                    socialMediaAds: this.socialMediaAds,
                    adsAditional: this.adsAditional,
                    comments: this.comments,
                })
                .then(function(response) {
                    currentObj.clearFields();
                })
                .then(function (response) {
                    currentObj.output = response.data;
                })
                .catch(function (error) {
                    currentObj.output = error;
                })
                .then(function(){
                    currentObj.returnContactView();
                })
            },

             clearFields(){
                this.name = "";
                this.email = "";
                this.phone = "";
                this.webSite = "";
                this.ads = "";
                this.socialMediaAds = "";
                this.adsAditional = "";
                this.comments = "";
            }, 

            returnContactView(){
               alert('Tus datos han sido enviados correctamente, nos pondremos en contacto lo antes posible. Saludos');
           }

          
        }
    }
</script>

<style  scoped>

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;

}

#register_form fieldset:not(:first-of-type) {
    display: none;
}

.container{
    margin-top: 120px;
}

.card-body{
    padding: 1rem !important;
}

.adsDoing , .check-box-ads {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    margin:10px 0;

    
}

.adsDoing i{
    margin: 0px 10px;
}

/* .check-box-ads{
 display: flex;
    flex-direction: column;
    justify-content: space-around;
    margin:10px 0;
} */

.commnents{
    display: flex;
    flex-direction: column;
    width: 100%;
}

/* .buttons-container{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
} */
.buttons{
    display: inline-block;
    margin-top: 10px;
    margin-bottom: 20px;
    padding: 5px 10px;
    background: #016899;
    border-radius: 15px;
    text-decoration: none;
    color: #ffff;
    box-shadow: 5px 3px 6px -2px rgba(0,0,0,0.75);
    cursor: pointer;
}



 @media only screen and (max-width: 768px) {

     .container{
        margin-top: 80px;
    }

    .adsDoing{
   
        justify-content: space-around;

    }
    
} 


</style>