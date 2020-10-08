<template>
    <div class="section-five">  
        <h2>¡ Hagamoslo Juntos !</h2>  
        <h2>Cuentanos de tu proyecto</h2>  
        
        <form class="form-container" @submit="sendContact" >
            <div class="col">
                <div class="input-box">
                    <input type="text" required="required" v-model="name">
                    <span class="text">Nombre</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="input-box">
                    <input type="text" required="required"  v-model="lastname">
                    <span class="text">Apellido</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="input-box">
                    <input type="email" required="required"  v-model="email">
                    <span class="text">Correo electrónico</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="input-box">
                    <input type="number" required="required"  v-model="phone">
                    <span class="text">Número movil</span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="form-container">
                <div class="col">
                    <div class="input-box textareaa">
                        <textarea  style="bakground:transparent"  v-model="message"></textarea>
                        <span class="text">Mensaje</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="form-container">
                <div class="col">
                    <input type="submit" value="Enviar">
                </div>
            </div>
          
        </form>
    
    </div>
</template>

<script>
export default {
    mounted(){
        console.log('eyy man.' );
    }, 

    data(){
        return{
            name:'',
            lastname:'', 
            email:'',
            phone:'',
            message:'',
            output:''
    
        }
    }, 

    methods: {
        sendContact(e){

            e.preventDefault();
            
            let currentObj = this;

            axios.post('api/contacts', {
                name: this.name,
                lastname: this.lastname, 
                email:this.email,
                phone: this.phone,
                message: this.message
            })
            .then(function(response){
                currentObj.clearFields();
            })
              
            .then(function (response) {
                    currentObj.output = response.data;
            })
            .catch(function (error) {
                currentObj.output = error;
            })
            .then(function(response){
                currentObj.returnContactView();
            })
        }, 

          clearFields(){
                this.name = "";
                this.lastname = "";
                this.email = "";
                this.phone = "";
                this.message= "";
               
            }, 

        returnContactView(){
           alert('Tus datos han sido enviados correctamente, nos pondremos en contacto lo antes posible. Saludos');
        }
    }
}
</script>

<style scoped>
.section-five{
    width: 80%;
    padding: 20px;
    justify-content: center;
    align-items: center;
}
.section-five h2{
    width: 100%;
    color:#016899;
    font-size: 36px;
    text-align: center;
    margin-bottom: 10px;
    font-weight: bolder;
}
.section-five .form-container{
    position: relative;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
}
.section-five .form-container .col{
    position: relative;
    width: 100%;
    padding: 0 10px;
    margin: 30px 0 10px;
    transition: .5s;
}
.section-five .form-container .input-box{
    position: relative;
    width: 100%;
    height: 40px;
    color:#016899;
}
.section-five .form-container .input-box input,
textarea{
    position:absolute;
    width: 100%;
    height: 100%;
    background-color: transparent;
    box-shadow: none;
    border: none;
    outline: none;
    font-size: 18px;
    font-weight: bolder;
    padding: 0 10px;
    z-index: 20;
    color: #000;
}
.section-five .form-container .input-box .text{
    position: absolute;
    top:0;
    left: 0;
    line-height: 40px;
    font-size: 18px;
    padding: 0 10px;
    display: block;
    transition: 0.5s;
    pointer-events: none;
    color: #016899;
    font-weight: bolder;
}
.section-five .form-container .input-box input:focus + .text,
.section-five .form-container .input-box input:valid + .text{
    top: -35px;
    left: -10px;
}
.section-five .form-container .input-box .line{
    position: absolute;
    bottom: 0;
    display: block;
    width: 100%;
    height: 2px;
    background: #016899;
    transition: 0.5s;
    border-radius: 15px;
    pointer-events: none;
}
.section-five .form-container .input-box input:focus ~ .line,
.section-five .form-container .input-box input:valid ~ .line{
    height: 100%;
}
.section-five .form-container .input-box.textareaa{
    position: relative;
    width: 100%;
    height: 100px;
    padding: 10px 0;
}
textarea{
    height: 100%;
    resize: none;
     
}
.section-five .form-container .input-box textarea:focus + .text,
.section-five .form-container .input-box textarea:valid + .text{
   
    top: -35px;
    left: -10px;
}
.section-five .form-container .input-box textarea:focus ~ .line,
.section-five .form-container .input-box textarea:valid ~ .line{
    
    height: 100%;
}
input[type="submit"]{
    border: 1px solid #016899;
    padding: 7px 35px;
    cursor: pointer;
    outline: none;
    font-size: 18px;
    border-radius: 50px;
    font-weight: bolder;
    color: #016899 !important;
    margin-top: 60px;
    transition: all .5s;
    box-shadow: 5px 3px 6px -2px rgba(0,0,0,0.75);
}
input[type="submit"]:hover{
        background: #016899;
        color: #ffff !important;
        font-size: 25px;
}
@media (max-width: 768px){
    
    .section-five{
        width: 100%;
        padding: 0px;
    }
}
</style>