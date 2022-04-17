<template>
    <div>
        
      
    <input id="encargado" type="text" class="form-control ocultar"  name="obra" required  v-bind:value="selectedId" >
    <v-select label="name" :filterable="false" :options="options" @search="onSearch" v-model="obra">

    <template slot="no-options">
      Buscar obra..
    </template>
    <template slot="option" slot-scope="option">
      <div class="d-center">
        {{ option.nombre_de_la_obra }}
        </div>
    </template>
    <template slot="selected-option" slot-scope="option">
      <div class="selected d-center">
        {{ option.nombre_de_la_obra }}
      </div>
    </template>

  </v-select>
 

    </div>
</template>

<script>

export default {
  data:function(){ 
        return {
            obra: '',
            options: []
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
        `/buscarobraform?keyword=${escape(search)}`
      ).then(res => {
        res.json().then(json => (vm.options = json));
        loading(false);
      });
    }, 350)
  },
  computed: {
    selectedId: function () {
      return this.obra.id;
    }
  }
}
  


</script>
    
<style>
.ocultar{
    display: none;
}
    img {
  height: auto;
  max-width: 2.5rem;
  margin-right: 1rem;
}

.d-center {
  display: flex;
  align-items: center;
}

.selected img {
  width: auto;
  max-height: 23px;
  margin-right: 0.5rem;
}

.v-select .dropdown li {
  border-bottom: 1px solid rgba(112, 128, 144, 0.1);
}

.v-select .dropdown li:last-child {
  border-bottom: none;
}

.v-select .dropdown li a {
  padding: 10px 20px;
  width: 100%;
  font-size: 1.25em;
  color: #3c3c3c;
}

.v-select .dropdown-menu .active > a {
  color: #fff;
}


</style>

