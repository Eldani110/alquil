<template>
      <div>
     <!-- <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">Equipo</th>
                    <th scope="col">Unidades</th>
                    <th scope="col">Valor diario</th>
                    <th scope="col">Fecha de entrega</th>
                    <th scope="col">Hora de entrega</th>
                    <th scope="col"></th>
                </tr>
            </thead>
      </table>   -->

                <div class="d-inline-flex px-2">
                  <div style="width: 150px;">
                    <p class="font-weight-bold w-100" for="">Equipo</p>
                  </div>
                  
                  <div style="width: 150px;">
                    <p class="font-weight-bold w-100" for=""  >Unidades</p>
                  </div>
                  
                  <div style="width: 150px;">
                    <p class="font-weight-bold w-100" for=""  >Valor diario</p>
                  </div>

                </div>   
                <vue-cloneya :minimum="1"
                :multiple="true"
                v-model="exampleMultipleData"
                v-on:minimum:cloneya="alert('min')"
                v-on:maximum:cloneya="alert('max')">
                <div class="contenedor pb-4">
                    <buscarequipo-component></buscarequipo-component>
                    <button type="button" class="btn btn-danger delete" tabindex="-1"  v-cloneya-remove><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-success clonspan" tabindex="-1" v-cloneya-add><i class="fa fa-plus"></i></button>
                </div>
                    
                </vue-cloneya>
      </div>
        
                              
</template>

<script>
export default {
  name: "Example",
  data: () => {
    return {
      title: "Vue Cloneya",
      exampleData: ["Vue", "Cloneya", "VueCloneya Example", "More than min"],
      exampleMultipleData: [
        {
        }
      ]
    };
  },
  mounted() {
    /*
    See what happens when "value" changes
    setTimeout(() => {
      this.exampleData.reverse();
      console.log("Example data reversed");
    }, 5000);
    */
  },
  methods: {
    alert(msg) {
      console.log(msg);
    }
  }
};

</script>
    
<style>
.contenedor{
  display: flex;
}

</style>

