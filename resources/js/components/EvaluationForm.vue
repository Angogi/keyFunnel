
<template>
    <div class="container">
        
        <h2><strong>Accede a tu evaluación gratuita</strong></h2>
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
                    <input type="button" v-on:click="userRegister" class="next-form buttons" value="Next"/>
                   
               </fieldset>
               <fieldset class="fieldset">
                    <h3>Gracias por confiar tu información personal con nosotros, <strong>{{name}}.</strong></h3>
                    <h4>Ahora necesitaremos alguna información sobre tu negocio.</h4>

                    <h3><strong>Tipo de negocio</strong></h3>
                    <input type="text" class="form-control" v-model="tipoDeNegocio" placeholder="...">

                    <h3><strong>Sitio Web</strong></h3>
                    <input type="text" class="form-control" v-model="webSite" placeholder="wwww...">

                   
                    <h3><strong>¿Has hecho publicidad tradicional?</strong></h3>
                    <div class="adsDoing">
                        
                        <b-form-radio v-model="tAds" name="¿traditionalAds?" value="Si"><h4>Si<i class="fas fa-smile-wink"></i></h4></b-form-radio>
                        <b-form-radio v-model="tAds" name="¿traditionalAds?" value="No"><h4>No<i class="fas fa-sad-cry"></i></h4></b-form-radio>
                     
                    </div>

                    <b-form-checkbox-group class="check-box-ads" v-if="tAds == 'Si'" v-model=" traditionalAds" name="traditional ads">
                        <h3><strong>¿Cuales de los siguientes medios has usado?</strong></h3>
                        <b-form-checkbox value="Revistas" name="traditionalAdss[]"><h4>Revistas</h4></b-form-checkbox>
                        <b-form-checkbox value="Flyers" name="traditionalAds[]"><h4>Flyers</h4></b-form-checkbox>
                        <b-form-checkbox value="Carteles" name="traditionalAds[]"><h4>Carteles</h4></b-form-checkbox>
                        <b-form-checkbox value="Transporte público" name="traditionalAdss[]"><h4>Transporte público</h4></b-form-checkbox>
                        <b-form-checkbox value="Televisión" name="traditionalAds[]"><h4>Televisión</h4></b-form-checkbox>
                        <b-form-checkbox value=">Radio" name="traditionalAds[]"><h4>Radio</h4></b-form-checkbox>
                    </b-form-checkbox-group>

                    <h3><strong>¿Has hecho publicidad en redes sociales y/o google?</strong></h3>
                    <div class="adsDoing">
                        
                        <b-form-radio v-model="sAds" name="¿ads?" value="Si"><h4>Si<i class="fas fa-smile-wink"></i></h4></b-form-radio>
                        <b-form-radio v-model="sAds" name="¿ads?" value="No"><h4>No<i class="fas fa-sad-cry"></i></h4></b-form-radio>
                     
                    </div>

                    <b-form-checkbox-group class="check-box-ads" v-if="sAds == 'Si'" v-model="socialMediaAds" name="social media ads">
                        <h3><strong>¿Cuales de los siguientes medios has usado?</strong></h3>
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
                    
                    <strong> Tu correo electrónico: {{email}}</strong>
                    <br>
                    <strong>Tu número de contacto: {{phone}}</strong>
                    <br> 
                    <strong> Tu sitio web: {{webSite}}</strong>
                    <br>
                    <br>
                    <div class="comments">
                        <h5><strong>Algo adicional que nos quieras comentar</strong></h5>
                        <textarea rows="5" cols="50" type="text"  v-model="comments"> </textarea>
                    </div>
                    <b-form-checkbox-group v-model="terminosYcondiciones" id="checkboxes-4">
                        <b-form-checkbox value="acepto">He leído y acepto los <a href="">términos y condiciones</a></b-form-checkbox>
                    </b-form-checkbox-group>
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

                
                user_id :'',
                tipoDeNegocio:'',
                webSite:'',
                tAds:'',
                traditionalAds:[],
                sAds: '',
                socialMediaAds:[],
                adsAditional:'',
                comments:'',
                terminosYcondiciones:[],
                output:''
                
            };

        
        },
        methods: {

            userRegister(e){
                e.preventDefault();

                let currentObj = this;

                axios.post('api/user', {
                    name: this.name,
                    email: this.email, 
                    phone: this.phone,

                    
                }).then(function(response){
                    
                    currentObj.user_id = response.data;
                 

                })
            },

            formSubmit(e) { 

                e.preventDefault();
               
                let currentObj = this;

                axios.post('api/free-evaluations', {
                   
                    user_id : this.user_id,
                    tipoDeNegocio: this.tipoDeNegocio,
                    webSite: this.webSite,
                    tAds: this.tAds,
                    traditionalAds: this.traditionalAds,
                    sAds: this.sAds,
                    socialMediaAds: this.socialMediaAds,
                    adsAditional: this.adsAditional,
                    comments: this.comments,
                    terminosYcondiciones: this.terminosYcondiciones,
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

            getCurrentCustomer(e){
                 e.preventDefault();

                 let currentObj = this;

                customerInfo = {
                    name: this.name,
                    email: this.email,
                    phone: this.phone,
                }

                 axios.get('api/customer', {

                     params : customerInfo
                 })

            },

             clearFields(){
                this.name = "";
                this.email = "";
                this.phone = "";
                this.tipoDeNegocio = "";
                this.webSite = "";
                this.tAds = "";
                this.traditionalAds = "";
                this.sAds = "";
                this.socialMediaAds = "";
                this.adsAditional = "";
                this.comments = "";
                this.terminosYcondiciones = "";
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
    margin-top: 50px;
}

.container h2{
    text-align: center;
    background: #003;
    border-radius: 18px;
    color:#f9c259;
    font-size: 3rem;
    font-weight: bold;
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

    

    .adsDoing{
   
        justify-content: space-around;

    }
    
} 


</style>