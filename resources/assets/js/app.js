require('./bootstrap');

window.Vue=require('vue');

window.VueRouter=require('vue-router').default;

window.VueAxios=require('vue-axios').default;

window.Axios=require('axios').default;

let AppLayout=require('./components/App.vue');

//ver la plantilla lista de profesionales
const Listprofesionals=Vue.component('Listprofesionals',require('./components/Listprofesionals.vue'));

//pantilla agregar profesionales
const Addprofesionals=Vue.component('Addprofesionals',require('./components/Addprofesionals.vue'));

//Plantilla editar profesional
const Editprofesionals=Vue.component('Editprofesionals',require('./components/Editprofesionals.vue'));

//Plantilla eliminar profesional
const Deleteprofesionals=Vue.component('Deleteprofesionals',require('./components/Deleteprofesionals.vue'));

//Plantilla ver profesional unico 
const Viewprofesionals=Vue.component('Viewprofesionals',require('./components/Viewprofesionals.vue'));

//modulos de registro

Vue.use(VueRouter,VueAxios,axios);

const routes=[
    {
        name:'Listprofesionals',
        path:'/listProfesionals',
        component: Listprofesionals
    },
    {
        name:'Addprofesionals',
        path:'/add-profesionals',
        component:Addprofesionals  
    },
    {
        name:'Editprofesionals',
        path:'/edit/:id',
        component:Editprofesionals
    },
    {
        name:'Deleteprofesionals',
        path:'delete-profesionals',
        component:Deleteprofesionals
    },
    {
        name:'Viewprofesionals',
        path:'/view/:id',
        component:Viewprofesionals
    }
];

const router = new VueRouter({mode: 'history', routes: routes});
new Vue(
   Vue.util.extend(
       {router},
       AppLayout
   ) 
).$mount('#app');