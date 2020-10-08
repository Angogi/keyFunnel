<template>
  <div class="webinar-form-inputs">
    <b-form @submit="onSubmit" @reset="onReset" v-if="show">
      

      <b-form-group id="input-group-2" label="Tu nombre:" label-for="input-2">
        <b-form-input
          id="input-2"
          v-model="form.name"
          required
          placeholder="Tu nombre"
        ></b-form-input>
      </b-form-group>

      <b-form-group
        id="input-group-1"
        label="Tu mejor email:"
        label-for="input-1"
        description="Nunca compartiremos tu email con terceros"
      >
        <b-form-input
          id="input-1"
          v-model="form.email"
          type="email"
          required
          placeholder="Tu email @"
        ></b-form-input>
      </b-form-group>

      <b-form-group id="input-group-3" label="Fecha:" label-for="input-3">
        <b-form-select
          id="input-3"
          v-model="form.date_session"
          :options="date_session"
          required
        ></b-form-select>
      </b-form-group>

      <b-form-group id="input-group-4">
        <b-form-checkbox-group v-model="form.terminosYcondiciones" id="checkboxes-4">
          <b-form-checkbox class="trmsYcondiLabel" value="acepto">He leído y acepto los <a href="">términos y condiciones</a></b-form-checkbox>
          
        </b-form-checkbox-group>
      </b-form-group>

      <b-button class="button-form" type="submit" variant="danger">Enviar solicitud</b-button>
      <!-- <b-button type="reset" variant="danger">Cambiar datos</b-button> -->
      <b-button  class="button-form" v-if="form.date_session == 'Ver ahora'" v-on:click="verAhora" variant="primary">Ver ahora</b-button>
    </b-form>
    <!-- <b-card class="mt-3" header="Form Data Result">
      <pre class="m-0">{{ form }}</pre>
    </b-card> -->
  </div>
</template>

<script>
  export default {
    data() {
      return {
        form: {
          email: '',
          name: '',
          date_session: null,
          terminosYcondiciones: []
        },
        date_session: [{ text: 'Selecciona Hora', value: null }, 
            'Ver ahora' , '09:00', '12:00', '15:00', '18:00', '21:00'],

        show: true
      }
    },
    methods: {
   
        onSubmit(evt) {
            evt.preventDefault();

            let currentObj = this;
            
            axios.post('api/webinar-registration', {
                
                email: this.form.email,
                name: this.form.name,
                date_session: this.form.date_session,
                terminosYcondiciones: this.form.terminosYcondiciones,

            
            }).then(function(){
                currentObj.goToHome();  
            }).catch(function (error) {
                alert(error);
            }).then(function(reponse){
                currentObj.clearFields();
           })
            
        },
        
        verAhora(evt){
            evt.preventDefault();

            let currentObj = this;

            axios.post('api/webinar-registration', {
                
                email: this.form.email,
                name: this.form.name,
                date_session: this.form.date_session,
                terminosYcondiciones: this.form.terminosYcondiciones,

                
            }).then(function(response){
                currentObj.removeWebinarForm();
                
            })

            
        },
        goToHome(){
            $('#goHome').addClass('showGoHome');
        },

        removeWebinarForm(){
            $('#webinar-form').addClass('move-webinar-form');
        },

        onReset(evt) {
            evt.preventDefault()
            // Reset our form values
            this.form.email = ''
            this.form.name = ''
            this.form.date_session = null
            this.form.terminosYcondiciones = []
            // Trick to reset/clear native browser form validation state
            this.show = false
            this.$nextTick(() => {
            this.show = true
            })
        },

    
        clearFields(){
            
            this.form.email = "";
            this.form.name = "";
            this.form.date_session = "";
            this.form.terminosYcondiciones = [];
            
        }, 
    }
  }
</script>

<style  scoped>

.webinar-form-inputs{
    background: #d0d5ea;
    border: 1px solid #003; 
    border-radius: 10px;
    box-shadow: 2px 5px 3px rgba(0,0 ,0, 0.5);
    padding: 10px;
    color: #003;
    font-size: 20px;
    font-weight: bolder;
    margin: 15px 15px;
    width: 750px;
}
.webinar-form-inputs .form-control {
    font-size: 1.5rem;
    font-weight: bold;;

}
#input-3 {
    font-size: 1.5rem;
    font-weight: bold;;

}

.trmsYcondiLabel{
  color: #f9c259;
}


.button-form{
  width: 100%;
  font-size: 1.3rem;
}

@media (max-width: 768px){
  .webinar-form-inputs{
    width: 80%;
  }

}



</style>