<template>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Ajouter un Vehicule</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Vehicule</li>
                            <li class="breadcrumb-item active">Ajouter</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Information sur le vehicule</strong> </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" v-model="form.marque_voiture" placeholder="Marque">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" v-model="form.model_voiture" placeholder="Modele">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" v-model="form.annee" placeholder="Annee">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mt-3">
                                        <textarea rows="4" class="form-control no-resize" v-model="form.description" placeholder="Description du Vehicule"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" v-model="form.image" placeholder="Image du vehicule">
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-6 col-sm-12">                                
                                    <select name="disponibilite_voiture" class="form-control show-tick"  v-model="form.disponibilite_voiture">
                                        <option value="">-- Disponibilite --</option>
                                        <option value="true">Disponible</option>
                                        <option value="false">Indisponible</option>
                                        
                                    </select>
                                </div> 
                                <br>
                                <br>
                                                           
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" v-model="form.prix_jour_voiture" placeholder="Prix par jour">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary" @click="addVoiture()">Enregistrer</button>
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
                    marque_voiture:"",
                    model_voiture:"",
                    annee:"",
                    description:"",
                    image:"",
                    disponibilite_voiture: "Disponible",
                    prix_jour_voiture:"",

                }),
            };
        },


        methods:{

            async addVoiture(){
                if(
                    this.form.marque_voiture != "" &&
                    this.form.description != "" &&
                    this.form.model_voiture != "" &&
                    this.form.annee !="" &&
                    this.form.image != "" && 
                    this.form.disponibilite_voiture &&
                    this.form.prix_jour_voiture != ""
                ){
                    try{
                        await axios.post("/api/admin/voiture/store", this.form.data());
                        Swal.fire("Succès!", "Voiture ajouté avec succès!", "success");
                       // this.form.reset;
                       window.location.href = `/admin/voiture/index`;
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