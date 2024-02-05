
<template>
    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center  mb-5">
          	<span class="subheading">CE QUE NOUS OFFRONS</span>
            <h2 class="mb-2"> Vehicles de luxe</h2>
          </div>
        </div>
		<div class="row">
    			<div class="col-md-4" v-for="voiture in voiture" :key="voiture.id">
    				<div class="car-wrap">
    					<div class="img rounded d-flex align-items-end" :style="'background-image: url('+ voiture.image +');'">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="">{{ voiture.marque_voiture }}</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">{{ voiture.model_voiture }}</span>
	    						<p class="price ml-auto">{{ voiture.prix_jour_voiture }} <span>/jour</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a @click="addLocation(voiture.id)" class="btn btn-primary py-2 mr-1"> Reserver</a> <a :href="'/detailsVoiture/'+voiture.id" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
   

</template>

<script>


export default{
    mounted() {
        console.log('Component mounted.');
		this.getVoitures();
    },
	data(){
		return{
			voiture : [],
		};
	},
	
	methods:{
		async getVoitures() {
                try {
                    const response = await axios.get("/api/admin/voiture/index");
                    this.voiture = response.data; 
                } catch (error) {
                    console.error("Erreur lors de la récupération des voitures:", error);
                }
            },


			async addLocation(id)
            {

                Swal.fire({
                    title: 'Confirmation',
                    text: 'Êtes-vous sûr de vouloir réserver ce vehicule?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Confirmer',
                    cancelButtonText: 'Annuler'
                }).then(async (result) => {
                    if (result.isConfirmed){
						
          				window.location.href = '/voiture/location/' + id;
                    }
                })

            },
	}
}




</script>