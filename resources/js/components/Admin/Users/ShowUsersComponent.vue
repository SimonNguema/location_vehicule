<template>

    <!-- mani page content body part -->
        <div id="main-content">
            <div class="container-fluid">                        
                        
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2>Details utilisateur</h2>                           
                        </div>
                    
                    </div>
                </div>
    
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="card profile-header">
                            <div class="body text-center">
                                <div class="profile-image mb-3 text-center"> <img class="img-fluid rounded" src="https://pm1.narvii.com/7513/f9ef75ed7f82e70317efbc4ebb07164239007ee8r1-720-720v2_hq.jpg" alt=""> </div>
                                <div class="mt-4">
                                    <h4 class="mb-0"><strong></strong>{{ user.nom_utilisateur }} {{ user.prenom_utilisateur }}</h4>
                                    
                                </div>
                            </div>                    
                        </div>                               
                        <div class="card">
                            <div class="header">
                                <h2>Details de la location en cours</h2>
                            </div>
                            <div class="body">
                                <div class="workingtime">
                                    <span class="text-muted">Date du debut</span>
                                    <!-- <p>09:00 AM - 4:00 PM</p> -->
                                    <hr>
                                    <span class="text-muted">Date de fin</span>
                                    <!-- <p>09:00 AM - 12:30 PM</p> -->
                                </div>
                            </div>
                        </div> 
                                
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="header d-flex">
                                <h2>Details</h2>
                                <div class="ml-auto">
                                    <a class="btn btn-info" href="/admin/users/index"><i class="fa fa-arrow-left  mr-1"></i> Retour</a>
                                </div>
                            </div>
                            <div class="body">
                                <ul class="list-unstyled">
                                    <li><p><i class="fas fa-envelope"></i>  <strong>Email:</strong> {{ user.email_utilisateur }} </p></li>
                                    <li><p><i class="fas fa-phone"></i> <strong>Telephone:</strong>{{ user.telephone_utilisateur }}</p></li>
                                    <li><p><i class="fas fa-map-marker"></i> <strong>Adresse</strong> {{ user.adresse_utilisateur }}</p></li>
                                    <li><p><i class="fas fa-user"></i>  <strong>Role:</strong>  {{ user.role_utilisateur }}</p></li>
                                    <div>
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#Update_Users"><button class="btn btn-primary btn-simple" style="margin-left: 7px" @click="openUpdateModal(user)">Modifier</button></a>
                                        
                                    </div>
                                    
                                    
                                </ul>
                                
                                <hr>
                                <h5>Activités</h5>
    
                                
                        
                            <div class="body">
                                <ul class="nav nav-tabs-new2">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Details"> Details</a></li>
                                </ul>
                                <div class="tab-content padding-0 mt-3">
                                    <div class="tab-pane active" id="Details">
                                        
                                     
                                        <h6>Details Locarion</h6>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>Voiture</th>
                                                        <th>Prix</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <!-- <td>Bsc (Hons)</td>
                                                        <td>2 years full time</td>
                                                        <td>OUK23</td> -->
                                                    </tr>
                                                    <tr>
                                                        <!-- <td>Bsc</td>
                                                        <td>3 years full time</td>
                                                        <td>OUB18</td> -->
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                       
                    </div>  
                                <p></p>
                                <p></p>
                                <p></p>
                                <p></p>
                                <p></p>
                                
                            </div>
                        </div>
                    
                    </div>
                </div>
                        
            </div>
        
        
        <!-- modal update  -->
        <div class="modal fade" id="Update_Users" tabindex="-1" role="dialog" style="z-index: 1052;">
        <div class="modal-dialog modal-lg" role="document">
    
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="title" id="defaultModalLabel">Modifier les informations de l'utilisateur</h6>
                </div>
                <form>
                    
            
                <div class="modal-body">
                    <h6></h6>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="form.nom_utilisateur" name="nom_utilisateur" placeholder="Nom">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="form.prenom_utilisateur" name="prenom" placeholder="Prenom">
                            </div>
                        </div>
                        
                        
                    </div>
                    
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="form.email_utilisateur" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="form.telephone_utilisateur" name="telephone" placeholder="Telephone">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="form.adresse_utilisateur" name="adresse" placeholder="Adresse">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <select name="role" v-model="form.role_utilisateur" id="role"  class="form-control">
                                    <option value="1">Select...</option>
                                    <option value="Simple_Utilisateur">Simple_Utilisateur</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            
                            </div>
                        </div>
                        
                    </div>
                </div>
    
        
                <div class="modal-footer">
                    <button @click.prevent="updateUser()" class="btn btn-primary">Mettre a jour</button>
                
                    <button type="button" @click="form.reset" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
                </form>
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
            this.getUsersDetails(); 
            console.log('Component mounted.');
                  
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
                
                
                
               
                }),
                user: [],
                selectedUser: '',
                         
            };
        },
        methods: {
            getUsersDetails(){
                 axios.get(`/api/admin/users/${this.id}`)
                .then(response => {
                    console.log(response.data);
                     this.user = response.data;
                }).catch(error =>{
                    console.log(error);
                });
    
            },
    
            openUpdateModal(user)
            {
                this.selectedUser = user;
                this.form.fill
                ({ 
                    nom_utilisateur: user.nom_utilisateur,
                    prenom_utilisateur: user.prenom_utilisateur,
                    telephone_utilisateur: user.telephone_utilisateur,
                    adresse_utilisateur: user.adresse_utilisateur,
                    email_utilisateur: user.email_utilisateur,
                    role_utilisateur: user.role_utilisateur,
                
                });
            },
    
    
            // async updateUser()
            // {
            //     if(this.form.nom_utilisateur != "" && this.form.prenom_utilisateur != "" && this.form.adresse_utilisateur != "" && this.form.telephone_utilisateur != "" && this.form.email_utilisateur != "" )
            //     {
    
                
            //         try{
            //             await axios.put(`/api/admin/users/${this.selectedUser.id}`, this.form.data());
                        
            //             Swal.fire('Succès!', 'Les informations de l\'utilisateur ont été mises à jour avec succès!', 'success')
            //                 .then(
            //                     () => {
            //                         // this.form.reset();
            //                         this.getUsersDetails();
            //                         //window.location.href =`/admin/users/${this.users.id}`;
                                                            
    
            //                     }
            //                 );
            //         }catch(error)
            //         {
            //             console.log(error);
            //             if(error.response.status==422)
            //             {
            //                 Swal.fire('Erreur!', 'Veuillez remplir tous les champs obligatoires!', 'error');
            //             }
            //         }
            //     }else
            //     {
            //         Swal.fire('Erreur!', 'Veuillez remplir tous les champs obligatoires!', 'error');
            //     }
            // },
           
    
        },
    
    };
</script>
    
    