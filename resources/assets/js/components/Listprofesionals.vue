<template id="profesional-list" >
    <div class="row">
        <div class="pull-right">
            <router-link class="btn btn-xs btn-primary" v-bind:to="{path:'/add-profesionals'}">
               <span class="glyphicon glyphicon-plus"></span> 
               Agregar nuevo profesional
            </router-link>
            <br><br>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Rut</th>
                    <th>Ciudad</th>
                    <th>Direccion</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th class="col-md-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(profesional,index) in filteredProfesionals">
                    <td>{{ index + 1 }}</td>
                    <td>{{profesional.nombres}}</td>
                    <td>{{profesional.apellidos}}</td>
                    <td>{{profesional.rut}}</td>
                    <td>{{profesional.ciudad}}</td>
                    <td>{{profesional.direccion}}</td>
                    <td>{{profesional.correo}}</td>
                    <td>{{profesional.telefono}}</td>
                    <td>
                        <router-link class="btn btn-info btn-xs" v-bind:to="{name:'Viewprofesionals',params:{id: profesional.id}}">Ver</router-link>
                        <router-link class="btn btn-warning btn-xs" v-bind:to="{name:'Editprofesionals',params:{id: profesional.id}}">Editar</router-link>
                        <router-link class="btn btn-danger btn-xs" v-bind:to="{name:'Deleteprofesionals',params:{id: profesional.id}}">Eliminar</router-link>
                    </td>
                </tr> 
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data:function(){
        return{profesionals: ''};
    },
    created: function(){
        let uri ='http://127.0.0.1:8000/profesionals/';
        Axios.get(uri).then((response)=>{
            this.profesionals = response.data;
        });
    },
    computed:{
        filteredProfesionals:function(){
            if(this.profesionals.length){
                return this.profesionals;
            }
        }
    }
    
}
</script>




