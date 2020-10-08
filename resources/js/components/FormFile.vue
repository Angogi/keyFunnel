<template>
  <div class="container-file-input">
    <h2>Subir Video</h2>
    <b-form-file v-model="file" ref="file-input" class="mb-2"></b-form-file>

    <b-button @click="clearFiles" class="mr-2">Cambiar Archivo</b-button>
    <button @click="UploadFiles" class="btn btn-success">Subir Archivo</button>
    <!-- <b-button @click="file = null">Reset via v-model</b-button> -->

    <p class="mt-2">Archivo Seleccionado: <b>{{ file ? file.name : '' }}</b></p>
  </div>
</template>

<script>
// import func from '../../../vue-temp/vue-editor-bridge';
  export default {
    data() {
      return {
        file: []
      }
    },
    methods: {
      UploadFiles(){
       
        let currentObj = this;

          axios.post('api/file', {
              file: this.file,
              
          }).then(function(reponse){
            alert(currentObj);
          })
      },
      clearFiles() {
        this.$refs['file-input'].reset()
      }, 
     
    }
  }
</script>

<style scoped>
  .container-file-input{
    width: 80%;

  }
</style>