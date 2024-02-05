<template>
	<div class="container" style="margin-top: 350px; margin-bottom: 20px">
	  <div class="row no-gutters">
		<div class="col-md-12 featured-top">
		  <div class="row no-gutters">
			<div class="col-md-4 d-flex align-items-center">
			  <form action="#" class="request-form ftco bg-primary">
				<h2>Entrez les informations de la location</h2>
				
  
				<div class="d-flex">
				  <div class="form-group mr-2">
					<label for="" class="label">Date de debut</label>
					<input type="date" v-model="form.date_debut_location" class="form-control" id="book_pick_date" placeholder="Date" @change="calculateMontantTotal">
				  </div>
				  <div class="form-group ml-2">
					<label for="" class="label">Date de fin</label>
					
					<input type="date" v-model="form.date_fin_location" class="form-control" id="book_off_date" placeholder="Date" @change="calculateMontantTotal">
				  </div>
				</div>
  
				<div class="form-group">
				  <label for="" class="label">Montant total location</label>
				  <input type="text" v-model="form.montant_total_location" class="form-control" placeholder="Prix" readonly>
				</div>
  
				<div class="form-group">
				  <label for="" class="label">Date de reservation</label>
				  <input type="date" class="form-control" v-model="form.date_reserve_location" placeholder="Time" readonly>
				</div>
  
				<div class="form-group">
				  <input type="submit" @click="sendLocationVoiture()" value="Louez ce vehicule maintenant" class="btn btn-secondary py-3 px-4">
				</div>
			  </form>
			</div>
			<div class="col-md-8 d-flex align-items-center">
			  <div class="services-wrap rounded-right w-100">
				<h3 class="heading-section mb-4">Etapes de la location des vehicules</h3>
				<div class="row d-flex mb-4">
				  <div class="col-md-4 d-flex align-self-stretch ">
					<div class="services w-100 text-center">
					  <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
					  <div class="text w-100">
						<h3 class="heading mb-2">Choisissez le vehicule que vous souhaitez louer</h3>
					  </div>
					</div>
				  </div>
				  <div class="col-md-4 d-flex align-self-stretch">
					<div class="services w-100 text-center">
					  <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
					  <div class="text w-100">
						<h3 class="heading mb-2">Entrez les informations de la location</h3>
					  </div>
					</div>
				  </div>
				  <div class="col-md-4 d-flex align-self-stretch ">
					<div class="services w-100 text-center">
					  <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
					  <div class="text w-100">
						<h3 class="heading mb-2">Effectuer au moins la moitié de paiement pour confirmer</h3>
					  </div>
					</div>
				  </div>
				</div>
				<h3 class="heading-section mb-4">Vous voullez réservez ce vehicule plus tard?</h3>
				<p><a href="#" class="btn btn-primary py-3 px-4">Réservez ce vehicule à votre panier</a></p>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </template>
  
  <script>
  import Swal from 'sweetalert2';
  import { differenceInDays } from 'date-fns';
  
  export default {
	props: ['id', 'auth_id'],
	mounted() {
	  this.getVoitureDetails();
	  this.form.user_id = this.auth_id;
	  this.form.date_reserve_location = new Date().toISOString().split("T")[0];
	},
	data() {
	  return {
		form: new Form({
		  date_debut_location: "",
		  date_fin_location: "",
		  montant_total_location: "",
		  date_reserve_location: "",
		  status_location: "Attente de paiement",
		  user_id: "",
		  voiture_id: "",
		}),
		voiture: {},
		user: {},
	  };
	},
	methods: {
	  sendLocationVoiture() {
		if (
		  this.form.date_debut_location !== "" &&
		  this.form.date_fin_location !== "" &&
		  this.form.montant_total_location !== "" &&
		  this.form.date_reserve_location !== ""
		) {
		  try {
			this.form.user_id = this.auth_id;
			this.form.voiture_id = this.id;
			axios.post("/api/location/store", this.form.data())
			  .then(() => {
				Swal.fire("Succès!", "Location envoyé avec succès!", "success");
				this.form.reset();
			  })
			  .catch((error) => {
				console.log(error);
				if (error.response.status === 422) {
				  Swal.fire("Erreur!", "Veuillez remplir tous les champs obligatoires!", "error");
				}
			  });
		  } catch (error) {
			console.log(error);
		  }
		} else {
		  Swal.fire("Erreur!", "Veuillez remplir tous les champs obligatoires!", "error");
		}
	  },


	  async getVoitureDetails() {
		try {
		  const response = await axios.get(`/api/voiture/location/${this.id}`);
		  this.voiture = response.data;
		  
		} catch (error) {
		  console.error("Erreur lors de la récupération des détails de la voiture:", error);
		}
	  },


	  calculateMontantTotal() {
		if (this.form.date_debut_location && this.form.date_fin_location) {
		  // Vérifier si la date de début est inférieure à la date actuelle
		  if (new Date(this.form.date_debut_location) < new Date()) {
			Swal.fire("Erreur!", "La date de début ne peut pas être antérieure à la date actuelle.", "error");
			return;
		  }
  
		  // Vérifier si la date de fin est inférieure à la date de début
		  if (new Date(this.form.date_fin_location) < new Date(this.form.date_debut_location)) {
			Swal.fire("Erreur!", "La date de fin ne peut pas être antérieure à la date de début.", "error");
          return;
        }

        // Calculer le nombre de jours entre la date de début et la date de fin
        const numberOfDays = differenceInDays(
          new Date(this.form.date_fin_location),
          new Date(this.form.date_debut_location)
        );

        // Récupérer le prix par jour de la voiture
        const prixParJour = this.voiture.prix_jour_voiture;

        // Calculer le montant total de la location
        const montantTotal = numberOfDays * prixParJour;

        // Mettre à jour le champ montant_total_location dans le formulaire
        this.form.montant_total_location = montantTotal.toFixed(2);
      }
    },
  },
};
</script>
  