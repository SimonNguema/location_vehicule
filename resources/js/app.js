import './bootstrap';
import { createApp } from 'vue';

import { Form } from 'vform';
window.Form=Form;

import Swal from 'sweetalert2';
window.Swal =Swal;


const app = createApp({});

//Client Component
import LoginComponent from './components/Users/AuthClient/LoginComponent.vue';
app.component('login-client',LoginComponent)

import RegisterComponent from './components/Users/AuthClient/RegisterComponent.vue';
app.component('register-client',RegisterComponent)

import HomeComponent from './components/Users/Home/HomeComponent.vue';
app.component('home-page',HomeComponent)

import AllVoitureComponent from './components/Users/Voiture/AllVoitureComponent.vue';
import DetailsVoiture from './components/Users/Voiture/DetailsVoitureComponent.vue';
app.component('voiture-all', AllVoitureComponent)
app.component('voiture-details', DetailsVoiture)


//Contacter
import Contacter from './components/Users/Contacter/ContacterComponent.vue';
app.component('contacter-send', Contacter)


//location
import AddLocationClient from './components/Users/Reservation/AddLocationComponent.vue'
app.component('locationclient-add', AddLocationClient);






//Admin Component------------------------------------------------------------------------------------
import VoitureAdd from './components/Admin/Voiture/AddVoitureComponent.vue';
import VoitureIndex from './components/Admin/Voiture/IndexVoitureComponent.vue';
import VoitureShow from './components/Admin/Voiture/ShowVoitureComponent.vue';
app.component('voiture-add',VoitureAdd)
.component('voiture-index',VoitureIndex)
.component('voiture-show',VoitureShow)


import UsersAdd from './components/Admin/Users/AddUsersComponent.vue';
import UsersIndex from './components/Admin/Users/IndexUsersComponent.vue';
import UsersShow from './components/Admin/Users/ShowUsersComponent.vue';
app.component('users-add',UsersAdd)
.component('users-index',UsersIndex)
.component('users-show',UsersShow)

import LocationIndex from './components/Admin/Location/IndexLocationComponent.vue';
app.component('location-index', LocationIndex)

import ProfilAdmin from './components/Admin/ProfilAdmin/ProfilAdminComponent.vue';
app.component('profil-admin', ProfilAdmin);

//-----------------------------------------------------------------------------------------------------

app.mount('#app');