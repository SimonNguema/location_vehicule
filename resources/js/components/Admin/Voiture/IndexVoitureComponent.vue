<template>

<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Liste Hehicule</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Vehicule</li>
                            <li class="breadcrumb-item active">Liste</li>
                        </ul>
                    </div>
                    <div class="ml-auto">
                        <a class="btn btn-info" href="/admin/voiture/create">Ajouter un vehicule</a>
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
                                        <th class="border-top-0">Marque</th>
                                        <th class="border-top-0">Model</th>
                                        <th class="border-top-0">Année</th>
                                        <th class="border-top-0">Prix /jour</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="voiture in voiture" :key="voiture.id">
                                        
                                        <td><img class="rounded avatar" :src="voiture.image"></td>
                                        <td>{{ voiture.marque_voiture }}</td>
                                        <td>{{voiture.model_voiture}}</td>
                                        <td>{{ voiture.annee }} </td>
                                        <td>{{ voiture.prix_jour_voiture }}</td>
                                        <td v-if="voiture.disponibilite_voiture == true"><span class="badge badge-success">Disponible</span></td>
                                        <td v-else="voiture.disponibilite_voiture == false"><span class="badge badge-danger">Indisponible</span></td>									
									
                                        <td>
                                            <a :href="'/admin/voiture/'+voiture.id"><i class="fas fa-eye" style="color: deepskyblue;" title="Afficher les Details"></i></a>
                                            <i class="fas fa-edit text-warning" title="Modifier" style="padding-left: 15px; "></i>
                                            <i class="fas fa-trash-alt text-danger" style="padding-left: 15px; " @click="deleteVoiture(voiture.id)"></i>

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
            this.getVoitures();
        },

        data(){
            return{
                voiture : [],
            };
        },


        methods:
        {
            async getVoitures() {
                try {
                    const response = await axios.get("/api/admin/voiture/index");
                    this.voiture = response.data; 
                } catch (error) {
                    console.error("Erreur lors de la récupération des voitures:", error);
                }
            },

            async deleteVoiture(voitureId)
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
                        
                            await axios.delete(`/api/admin/voiture/${voitureId}`);
                            this.getVoitures();
                            Swal.fire('Succès!', 'Vehicule a été supprimé avec succès!', 'success');
                        }catch (error){
                            console.log(error);
                            Swal.fire('Erreur!', 'Une erreur est survenue lors de la suppression du Vehicule.', 'error');
                        }
                    }
                })

            },
        }
    }
</script>