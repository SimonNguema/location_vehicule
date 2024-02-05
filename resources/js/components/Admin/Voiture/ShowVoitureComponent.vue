<template>

   
    
    <!-- mani page content body part -->
        <div id="main-content">
            <div class="container-fluid">                        
                    <div class="block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h2>Details du vehicule</h2>                           
                            </div>
                        
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-8 col-md-4">
                            <div class="card profile-header">
                                <div class="body text-center">

                                    <div class="profile-image mb-3 text-center"> <img class="img-fluid" :src=" voiture.image "> </div>

                                </div>                    
                            </div>                               
                            <div class="card">
                                <div class="header">
                                    <h2>Working Time</h2>
                                </div>
                                <div class="body">
                                    <div class="workingtime">
                                        <span class="text-muted">Monday to Friday</span>
                                        <p>09:00 AM - 4:00 PM</p>
                                        <hr>
                                        <span class="text-muted">Saturday</span>
                                        <p>09:00 AM - 12:30 PM</p>
                                    </div>
                                </div>
                            </div>
                                    
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="header d-flex">
                                    <h2>Details</h2>
                                    <div class="ml-auto">
                                        <a class="btn btn-info" href="/admin/voiture/index"><i class="fa fa-arrow-left  mr-1"></i> Retour</a>
                                    </div>
                                </div>
                                <div class="body">
                                    <ul class="list-unstyled">
                                        <li><p><strong>Marque:</strong> {{ voiture.marque_voiture }} </p></li>
                                    <div>
                                        <li v-if="voiture.disponibilite_voiture == 'disponible'"><p><strong>Status:</strong><span class="badge badge-success"> {{ voiture.status }}</span></p></li>
                                        <!-- <li v-else-if="voiture.disponibilite_voiture == 'indisponible'"><p><strong>Status:</strong><span class="badge badge-danger">{{ selectedLivre.status }}</span></p></li> -->
                                    </div>
                                        <li><p><strong>Modele:</strong> {{ voiture.model_voiture }}</p></li>
                                        <li><p><strong>Annee:</strong> {{ voiture.annee }}</p></li>
                                        <li><p><strong>Prix/Jour:</strong> {{ voiture.prix_jour_voiture }}</p></li>
                                        <li><p><strong v-if="voiture.disponibilite_voiture == true">Status:</strong> <span class="badge badge-success">Disponible</span></p></li>
                                        <!-- <li><p><strong v-else="voiture.disponibilite_voiture == false">Status:</strong> <span class="badge badge-success">Indisponible</span></p></li> -->


                                        <div>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#Update_Livres"><button class="btn btn-primary btn-simple" style="margin-left: 7px" @click="openUpdateModal(livres)">Modifier</button></a>
                                            
                                        </div>
                                        
                                    </ul>
                                    
                                    <hr>
                                    <div class="header">
                                        <h2>Description</h2>
                                    </div>
                                    <p>{{ voiture.description }}</p>
                                    <p></p>
                                </div>
                            </div>
                        
                        </div>
                    </div>      
                        
            </div>
        </div>  
        
        
         <!-- Modal Update livre  -->
    <div class="modal fade" id="Update_Livres" tabindex="-1" role="dialog">
       <div class="modal-dialog modal-lg" role="document">

           <div class="modal-content">
               <div class="modal-header">
                   <h6 class="title" id="defaultModalLabel">Modifier vehicule</h6>
               </div>

               <!-- <form>
              
              
               <div class="modal-body">
                   <h6></h6>
                   <div class="row clearfix">
                       <div class="col-sm-12">
                           <div class="form-group">
                               <input type="text" class="form-control" v-model="form.marque_voiture" name="marque_voiture" placeholder="Marque">
                           </div>
                       </div>
                       <div class="col-sm-12">
                           <div class="form-group">
                        
                               <textarea name="description" id="description" v-model="form.description" class="form-control" placeholder="Descripttion"></textarea>
                           </div>
                       </div>
                    </div>
                   
                   <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="memoire">Memoire :</label>
                                <input type="checkbox" id="memoire" name="memoire" v-model="form.memoire" class="form-control" value="1">
                            </div>
                       </div>
                       <div class="col-sm-12">
                           <div class="form-group">
                            <select name="status" id="status" v-model="form.status" class="form-control">
                                 <option value="disponible">Disponible</option>
                                 <option value="indisponible">Indisponible</option>
                                 <option value="attente">En-Attente</option>
                           </select>
                           </div>
                       </div>
                       <div class="col-sm-12">
                           <div class="form-group">
                               <input type="number" class="form-control" v-model="form.quantite" name="quantite" placeholder="Quantite">
                           </div>
                       </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                               <input type="text" class="form-control" v-model="form.image" name="image" placeholder="Lien de l'image">
                           </div>
                       </div>
                    </div>
               </div>

          
               <div class="modal-footer">
                   <button type="submit" @click.prevent="updateLivre()" class="btn btn-primary">Mettre a jour</button>
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
               </div>
            </form> -->
           </div>
       </div>
   </div>
</template>
    
    
    
    <script>
    import axios from "axios";
    import Swal from "sweetalert2";
    import { Form } from "vform";
    
export default {
    props: ['id'],

    mounted() {
        this.getVoitureDetails();   
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
                disponibilite_voiture: "",
                prix_jour_voiture:"",
                
                
            }),

            voiture: {},
            selectedVoiture: '',      
        };

    },
        
    methods: {

        getVoitureDetails(){
            axios.get(`/api/admin/voiture/${this.id}`)
            .then(response => {
                
                this.voiture = response.data;
                //this.livreLocalisation = response.data.livreLocalisation;
                console.log(this.voiture);                
            }).catch(error =>{
                console.log(error);
            });

        },

        // openUpdateModal(voiture){
        //     this.selectedVoiture = this.voiture;
        //     this.form.fill({
        //         marque_voiture: voiture.marque_voiture,
        //         model_voiture: voiture.image,
        //         annee: voiture.annee,
        //         description: voiture.description,
        //         image: voiture.image,
        //         disponibilite_voiture: voiture.disponibilite_voiture,
        //         prix_jour_voiture: voiture.prix_jour_voiture,

        //     })
        // },

        // async updateLivre(){
        //     if(this.form.marque_voiture != "" && this.form.model_voiture != "" && this.form.annee != "" && this.form.description != "" && this.form.image != "" && this.form.disponibilite_voiture != "" && this.form.prix_jour_voiture != "" ){
        //         try{
        //             await axios.put(`/api/admin/livre/${this.selectedVoiture.id}`, this.form.data());
        //             this.form.reset();
        //             this.getVoitureDetails();
        //             Swal.fire('Succès!', 'Les informations du vehicule ont été mises à jour avec succès!', 'success');
        //         }catch(error){
        //             console.log(error);
        //             if(error.response.status==422){
        //                 Swal.fire('Erreur!', 'Veuillez remplir tous les champs obligatoires!', 'error');
        //             }
        //         }
        //     }else{
        //         Swal.fire('Erreur!', 'Veuillez remplir tous les champs obligatoires!', 'error');
        //     }
        // },

           
    
    },
    
};
    </script>