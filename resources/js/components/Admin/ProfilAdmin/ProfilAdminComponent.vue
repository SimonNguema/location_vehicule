<template>
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12">
        
        <div class="card member-card">
            <div class="header primary-bg">
                <h4 class="m-t-10 text-light">{{ user.nom_utilisateur }} {{ user.prenom_utilisateur}}</h4>
            </div>
            <div class="member-img">
                <a href="javascript:void(0);"><img src="https://pm1.narvii.com/7513/f9ef75ed7f82e70317efbc4ebb07164239007ee8r1-720-720v2_hq.jpg" class="rounded-circle" alt="profile-image"></a>
            </div>
            <div class="body">
                <div class="row text-center border-bottom pb-2">
                    <div class="col-md-6 border-right">
                        <label class="d-block text-muted mb-1">Nom</label>
                        <h6> <p>{{ user.nom }}</p></h6>
                    </div>
                    <div class="col-md-6">
                        <label class="d-block text-muted mb-1">Prenom</label>
                        <h6> {{ user.prenom_utilisateur }}</h6>
                    </div>
                </div>
                <div class="row text-center mt-2 border-bottom pb-2">
                    <div class="col-md-6 border-right">
                        <label class="d-block text-muted mb-1">Email</label>
                        <h6>{{ user.email_utilisateur }}</h6>
                    </div>
                    <div class="col-md-6">
                        <label class="d-block text-muted mb-1">Telephone</label>
                        <h6>{{ user.telephone_utilisateur }}</h6>
                    </div>
                </div>
                <div class="row text-center mt-2 border-bottom pb-2">
                    <div class="col-md-12">
                        <label class="d-block text-muted mb-1">Adresse</label>
                        <h6>{{ user.adresse_utilisateur }}</h6>
                    </div>
                </div>
                
            </div>
        </div>
            

            <!-- <div class="card">
                <div class="header">
                    <h2>Info</h2>
                    
                </div>
                <div class="body">

                    <small class="text-muted">Utilisateur: </small>
                    <p>{{ user.nom }} {{ user.prenom }}</p>

                    <small class="text-muted">Adresse: </small>
                    <p>{{ user.adresse }}</p>
                    
                    <small class="text-muted">Adresse email: </small>
                    <p>{{ user.email }}</p>
                    <small class="text-muted">Telephone: </small>
                    <p>{{ user.telephone }}</p>
    
                </div>
            </div>                     -->
        </div>
   
        <div class="col-lg-8 col-md-12">
<!--    
            <div class="card">
                <div class="row profile_state">
                    <div class="col-lg-3 col-6">
                        <div class="body">
                            <i class="fa fa-thumbs-up"></i>
                            <h5 class="m-b-0 number count-to" data-from="0" data-to="2365" data-speed="1000" data-fresh-interval="700">2365</h5>
                            <small>Experience</small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="body">
                            <i class="fa fa-star"></i>
                            <h5 class="m-b-0 number count-to" data-from="0" data-to="1203" data-speed="1000" data-fresh-interval="700">1203</h5>
                            <small>Awards</small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="body">
                            <i class="fa fa-user"></i>
                            <h5 class="m-b-0 number count-to" data-from="0" data-to="324" data-speed="1000" data-fresh-interval="700">324</h5>
                            <small>Clients</small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="body">
                            <i class="fa fa-bug"></i>
                            <h5 class="m-b-0 number count-to" data-from="0" data-to="1980" data-speed="1000" data-fresh-interval="700">1980</h5>
                            <small>Surgery</small>
                        </div>
                    </div>
                </div>
            </div> -->


            <div class="card" style="background-color:  #ffd230 ;">
                <div class="body" style="color: white;">
                    <ul class="nav nav-tabs-new">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Basic">Basic</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Compte</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#General">Activite</a></li>
                    </ul>
                </div>
            </div>

            <div class="tab-content padding-0">

                <div class="tab-pane active" id="Basic">
                    <div class="card">
                        <div class="body">
                            <h6> Information Basic</h6>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">                                                
                                        <input type="text" class="form-control" v-model="user.nom_utilisateur" placeholder="Nom" readonly>
                                    </div>
                                    <div class="form-group">                                                
                                        <input type="text" class="form-control" v-model="user.prenom_utilisateur" placeholder="Prenom" readonly>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">                                                
                                        <input type="text" class="form-control" placeholder="Adresse">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Telephone">
                                    </div>
                                    
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" @click="updateUser()">Mise a jour</button> &nbsp;&nbsp;
                            <button type="button" class="btn btn-default">annuler</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="Account">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                    <h6>Donnee du compte</h6>
                                    
                                    <div class="form-group">
                                        <input type="email" class="form-control" v-model="user.email_utilisateur" placeholder="Email" readonly>
                                    </div>
                                    
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <h6>Changer le Mot de passe</h6>
                                    <div class="form-group">
                                        <input type="password" v-model="updatePasswordForm.currentPassword" class="form-control" placeholder="Mot de passe actuel">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" v-model="updatePasswordForm.newPassword" placeholder="Nouveau mot de passe">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" v-model="updatePasswordForm.confirmPassword" placeholder="Confirmer le mot de passe">
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" @click="updatePassword()">Mise a jour</button> &nbsp;&nbsp;
                            <button class="btn btn-default">annuler</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="General">
                    <div class="card">
                        <div class="body">
                            <h6>Details des emprunts</h6>
                            <div class="row">
                                
                                <div class="col-lg-12 col-md-12">
                                    
                                    
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
import { Form } from "vform";

export default {
    props: ['user'],
    mounted(){
        console.log('Component mounted.');
    },
    data() {
        return{

            updateUserForm: new Form({
                adresse_utilisateur: this.user.adresse_utilisateur,
                telephone_utilisateur: this.user.telephone_utilisateur,
      }),
            updatePasswordForm: new Form({
                currentPassword: '',
                newPassword: '',
                confirmPassword: '',
      })
        }
            
    },

    methods: {

        async updateUser() {
            if(this.adresse_utilisateur != "" && this.telephone_utilisateur != ""){
                Swal.fire('Erreur!', 'Veuillez remplir tous les champs.', 'error');
                return;

            }
            
            try {
                await this.updateUserForm.put(`/api/admin/profil/${this.user.id}`);
                Swal.fire('Success', 'Informations mis a jour', 'success');
                location.reload();
            } catch (error) {
                Swal.fire('Error', 'Erreur lors de la mise a jour des informations', 'error');
            }
        },

        async updatePassword() {
            

            if (!this.updatePasswordForm.currentPassword || !this.updatePasswordForm.newPassword || !this.updatePasswordForm.confirmPassword) {
                Swal.fire('Erreur!', 'Veuillez remplir tous les champs.', 'error');
                return;
            }
            // Vérifiez si le nouveau mot de passe est identique à l'ancien mot de passe
            if (this.updatePasswordForm.currentPassword === this.updatePasswordForm.newPassword) {
                Swal.fire('Erreur!', 'Le nouveau mot de passe ne peut pas être identique à l\'ancien.', 'error');
                return;
            }


            if (this.updatePasswordForm.newPassword !== this.updatePasswordForm.confirmPassword) {
                Swal.fire('Erreur!', 'Les mots de passe ne correspondent pas.', 'error');
                return;
            }
            try {
                await this.updatePasswordForm.post(`/api/admin/profil/${this.user.id}`);
                Swal.fire('Success', 'Mot de passe mis a jour', 'success');
                this.updatePasswordForm.currentPassword = '';
                this.updatePasswordForm.newPassword = '';
                this.updatePasswordForm.confirmPassword = '';
            } catch (error) {
                if(error.response.status ==400){
                    Swal.fire('Error', 'Mot de passe actuel incorrect', 'error');
                }
            }
        }

        

        
    }
}

</script>


