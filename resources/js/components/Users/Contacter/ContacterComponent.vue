<template>
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
        	<div class="col-md-4">
        		<div class="row mb-5">
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-map-o"></span>
			          	</div>
			            <p><span>Adresse:</span> 198 West 21th Street, Suite 721 Dakar NY 10016</p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-mobile-phone"></span>
			          	</div>
			            <p><span>Telephone:</span> <a href="tel://1234567920">+221 771086691</a></p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a href="mailto:info@yoursite.com">glainnguema@gmail.com</a></p>
			          </div>
		          </div>
		        </div>
          </div>
          <div class="col-md-8 block-9 mb-md-5">
            <!-- <form action="#" class="bg-light p-5 contact-form"> -->
              <!-- <div class="form-group">
                <input type="text" class="form-control" placeholder="Votre Nom">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Votre Email">
              </div> -->
              <div class="form-group">
                <input type="text" class="form-control" v-model="form.sujet_message" placeholder="Sujet">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" v-model="form.contenu_message" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" @click="sendMessage()" value="Envoyer" class="btn btn-primary py-3 px-5">
              </div>
            <!-- </form> -->
          
          </div>
        </div>
      
      </div>
    </section>
</template>


<script>
import axios from "axios";
import Swal from "sweetalert2";
import { Form } from "vform";

export default {
  props: ['id'],

  mounted(){
        console.log('Component mounted.');
        this.form.user_id = this.id;
    },

  data() {
    return {
      form: new Form({
        sujet_message: "",
        contenu_message: "",
        user_id: ""
      }),
    };
  },
  methods: {
    async sendMessage() {
      if (this.form.sujet_message !== "" && this.form.contenu_message !== "") {
        try {
          await axios.post("/api/contacter", this.form.data());
          Swal.fire("Succès!", "Message envoyé avec succès!", "success");
        } catch (error) {
          console.log(error);
          if (error.response && error.response.status === 422) {
            Swal.fire("Erreur!", "Veuillez remplir tous les champs obligatoires!", "error");
          } else {
            Swal.fire("Erreur!", "Une erreur s'est produite lors de l'envoi du message!", "error");
          }
        }
      } else {
        Swal.fire("Erreur!", "Veuillez remplir tous les champs obligatoires!", "error");
      }
    },
  },
};
</script>