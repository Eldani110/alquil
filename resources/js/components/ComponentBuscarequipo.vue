<template>
  <div class="content-equipos " > 
          <div style="width:150px;" class="mx-2">
            <input id="equipo" type="text" class="form-control ocultar"  name="equipo" required  v-bind:value="selectedId" >
            <v-select label="name" class="w-100 " :filterable="false" :options="options" @search="onSearch" v-model="equipo">

              <template slot="no-options">
                Buscar Equipo..
              </template>
              <template slot="option" slot-scope="option">
                <div class="d-center">
                  {{ option.nombre }}
                  </div>
              </template>
              <template slot="selected-option" slot-scope="option">
                <div class="selected d-center">
                  {{ option.nombre }}
                </div>

              </template>
            </v-select>
          </div>
          
        <input id="input-live" type="text" class="form-control" style="width:150px;" v-model="unidades" :state="nameState">

        <input type="text" class="form-control" :value="this.equipo.valordiario" style="width:150px;">


  </div>
</template>

<script>

export default {
  data:function(){ 
        return {
            equipo: '',
            options: [],
            unidades: '',
        }
    },
  methods: {
    onSearch(search, loading) {
      if(search.length) {
        loading(true);
        this.search(loading, search, this);
      }
    },
    search: _.debounce((loading, search, vm) => {
      fetch(
        `/buscarequipoform?keyword=${escape(search)}`
      ).then(res => {
        res.json().then(json => (vm.options = json));
        loading(false);
      });
    }, 350)
  },
  computed: {
    selectedId: function () {
     
      return this.equipo.id;
    },

    nameState: function (){
       var existencia = this.equipo.existencia;
      var unidades_salida= this.unidades;
      
      if(existencia < unidades_salida){
        alert("No existe esa cantidad de " + this.equipo.nombre)

        this.unidades = '';

      }
      
    }
  }
  
}
  


</script>
    
<style>
.content-equipos{
  display: flex;
}

</style>

