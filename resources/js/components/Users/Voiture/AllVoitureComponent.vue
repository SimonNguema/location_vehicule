<template>
	<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assetsUser/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Choisissez votre voiture</h1>
          </div>
        </div>
      </div>
    </section>
	
	<section class="ftco-section bg-light">
    	<div class="container">
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
    		<div class="row mt-5">
				<div class="col text-center">
					<div class="block-27">
						<ul>
							<li><a href="#">&lt;</a></li>
							<li class="active"><span>1</span></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&gt;</a></li>
						</ul>
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