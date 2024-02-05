<template>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Liste Clients</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Clients</li>
                            <li class="breadcrumb-item active">Liste</li>
                        </ul>
                        
                    </div>
                    <div class="ml-auto">
                        <a class="btn btn-info" href="/admin/users/create">Ajouter utilisateur</a>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>                                       
                                        
                                        <th class="border-top-0">ID</th>
                                        <th class="border-top-0">Nom</th>
                                        <th class="border-top-0">Prenom</th>
                                        <th class="border-top-0">Adresse</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Telephone</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="user in user" :key="user.id">
                                        
                                        <td><span class="list-name">{{ user.id }}</span></td>
                                        <td>{{ user.nom_utilisateur }}</td>
                                        <td>{{ user.prenom_utilisateur }}</td>
                                        <td>{{ user.adresse_utilisateur }}</td>
                                        <td>{{ user.email_utilisateur }}</td>
                                        <td>{{ user.telephone_utilisateur }}</td>										
                                        <td>
                                            <a :href="'/admin/users/'+user.id"><i class="fas fa-eye" style="color: deepskyblue;" title="Afficher les Details"></i></a>
                                            <i class="fas fa-edit text-warning" title="Modifier" style="padding-left: 15px; "></i>
                                            <i class="fas fa-trash-alt text-danger" style="padding-left: 15px; " @click="deleteClient(user.id)"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <ul class="pagination pagination-primary">
                        <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>



<script>
import axios from 'axios';

    export default {
        mounted() {
            console.log('Component mounted.');
            this.getClients();
        },

        data(){
            return{
                user : [],
            };
        },


        methods:
        {
            async getClients() {
                try {
                    const response = await axios.get("/api/admin/users/index");
                    this.user = response.data; 
                } catch (error) {
                    console.error("Erreur lors de la récupération des clients:", error);
                }
            },

            async deleteClient(userId)
            {

                Swal.fire({
                    title: 'Confirmation',
                    text: 'Êtes-vous sûr de vouloir supprimer ce vehicule?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Oui',
                    cancelButtonText: 'Non'
                }).then(async (result) => {
                    if (result.isConfirmed){
                        try{
                        
                            await axios.delete(`/api/admin/users/${userId}`);
                            this.getClients();
                            Swal.fire('Succès!', 'Client a été supprimé avec succès!', 'success');
                        }catch (error){
                            console.log(error);
                            Swal.fire('Erreur!', 'Une erreur est survenue lors de la suppression du Client.', 'error');
                        }
                    }
                })

            },
        }
    }
</script>