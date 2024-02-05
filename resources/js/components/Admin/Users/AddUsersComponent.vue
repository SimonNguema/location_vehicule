<template>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Ajouter Clients</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Clients</li>
                            <li class="breadcrumb-item active">Ajouter</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Information</strong> Client </h2>
                            
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" v-model="form.nom_utilisateur" placeholder="Nom">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" v-model="form.prenom_utilisateur" placeholder="Prenom">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" v-model="form.telephone_utilisateur" placeholder="Telephone.">
                                    </div>
                                </div>
                               
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" v-model="form.adresse_utilisateur" placeholder="Adresse">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" v-model="form.email_utilisateur" placeholder="Entrer L'adresse Email">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">                                
                                    <select name="role_utilisateur" class="form-control show-tick" v-model="form.role_utilisateur">
                                        <option value="">-- Role --</option>
                                        <option value="Admin">Client</option>
                                        <option value="Client">Admin</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">                                
                                    <div class="form-group">
                                        <input type="password" class="form-control" v-model="form.password" placeholder="Mot de passe">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                
                                
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary" @click="addClient()">Enregistrer</button>
                                    <button type="submit" class="btn btn-outline-secondary">Annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>



<script>
import axios from "axios";
import Swal from "sweetalert2";
import {Form} from "vform";


    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data(){
            return{
           
                form: new Form({
                    nom_utilisateur:"",
                    prenom_utilisateur:"",
                    telephone_utilisateur:"",
                    adresse_utilisateur:"",
                    email_utilisateur:"",
                    role_utilisateur: "",
                    password:"",
                    //admin_id:"",

                }),
            };
        },


        methods:{

            async addClient(){
                if(
                    this.form.nom_utilisateur != "" &&
                    this.form.prenom_utilisateur != "" &&
                    this.form.telephone_utilisateur != "" &&
                    this.form.adresse_utilisateur !="" &&
                    this.form.email_utilisateur != "" &&
                    this.form.role_utilisateur != "" && 
                    this.form.password != ""
                    
                ){
                    //this.form.role_utilisateur = "Client";

                    try{
                        await axios.post("/api/admin/users/store", this.form.data());
                        Swal.fire("Succès!", "Client ajouté avec succès!", "success");
                       // this.form.reset;
                       window.location.href = `/admin/users/index`;
                        //Add method for actualiser la liste de voiture
                    }catch(error){
                        console.log(error);
                        if (error.response.status == 422){
                            Swal.fire("Erreur!", "Veuillez remplir tous les champs obligatoires!", "error");

                        }
                    }

                }else{
                    Swal.fire("Erreur!", "Veuillez remplir tous les champs obligatoires!", "error");

                }
                
            }

        
        }


    }
</script>