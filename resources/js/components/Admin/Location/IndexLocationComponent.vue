<template>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Liste reservation</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Reservation</li>
                            <li class="breadcrumb-item active">Liste</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
                                <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button>
                            </div>
                            <div class="p-2 d-flex">
                                
                            </div>
                        </div>
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
                                <input type="text" class="form-control" placeholder="Recherche...">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>                                       
                                        <th class="border-top-0">ID</th>
                                        <th class="border-top-0">Nom</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Telephone</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>                                                               
                                    <tr v-for="location in location" :key="location.id">
                                        <td><span class="list-name">{{ location.id }}</span></td>
                                        <td>charlie</td>
                                        <td>{{ location.user.email }}</td>
                                        <td >{{ location.user.telephone_utilisateur }}</td>
                                        <td>{{location.status_location}}</td>										
                                        <td><span class="badge badge-success">BBA</span></td>
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
            this.getLocations();
        },

        data(){
            return{
                location : [],
                user: [],
                voiture: []
            };
        },


        methods:
        {
            async getLocations() {
                try {
                    const response = await axios.get("/api/admin/location/index");
                    this.location = response.data; 
                } catch (error) {
                    console.error("Erreur lors de la récupération des location:", error);
                }
            },

            async deleteVoiture(locationId)
            {

                Swal.fire({
                    title: 'Confirmation',
                    text: 'Êtes-vous sûr de vouloir supprimer cette location?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Oui',
                    cancelButtonText: 'Non'
                }).then(async (result) => {
                    if (result.isConfirmed){
                        try{
                        
                            await axios.delete(`/api/admin/location/${locationId}`);
                            this.getLocations();
                            Swal.fire('Succès!', 'Cette location a été supprimé avec succès!', 'success');
                        }catch (error){
                            console.log(error);
                            Swal.fire('Erreur!', 'Une erreur est survenue lors de la suppression de cette location.', 'error');
                        }
                    }
                })

            },
        }
    }
</script>