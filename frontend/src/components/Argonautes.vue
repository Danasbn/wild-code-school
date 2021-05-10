<template>
  <div class="Argonautes">
    <!-- Header section -->
    <header>
      <h1>
        <img
          src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png"
          alt="Wild Code School logo" />
        Les Argonautes
      </h1>
    </header>

    <!-- Main section -->
    <main>

      <!-- New member form -->
      <h2>Ajouter un(e) Argonaute</h2>
      <form @submit.prevent="addName">
        <label for="name">Nom de l'argonaute:</label><br>
        <input id="name" type="text" v-model="name" placeholder="Entrer le nom ici" />

        <button type="submit">Envoyer</button>
      </form>

      <!-- Member list -->
      <div>
        <h2>Membres de l'équipage</h2>
      </div>
      <div id="col">
        <section class="member-list" v-for="(name, index) in names" :key="index">
          <div class="member-item">{{ name.name }}</div>

        </section>
      </div>
    </main>

    <footer>
      <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC avec l'aide de Dan</p>
    </footer>

  </div>
</template>

<script>
  import axios from "axios";
  export default {
    name: 'Argonautes',

    data() {
      return {
        name: '',
        namesUrl: "http://localhost:1234/names",
        names: [],

      }
    },
    methods: {
      // Retrieving names from Api
      getNames() {
        axios
          .get(this.namesUrl)
          .then(response => {
            this.names = response.data;
            console.log(this.names);
          })
          .catch(error => {
            console.log(error);
          });
      },
      // Adding name to APi
      addName() {

        axios.post(this.namesUrl, {
            name: this.name
          })
          .then(res => {
            this.names.push;
            console.log(res);
            window.location.reload();

          })
          .catch(error => {
            console.log(error);
          });
        this.name = '';
      },
    },
    mounted() {
      this.getNames();
    }
  }
</script>

<style>
  /* Using Wild code school CSS  */
  @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

  body {
    margin: 0;
    font-family: 'Roboto', sans-serif;
  }

  main {
    max-width: 960px;
    margin: 0 auto;
    position: relative;
  }

  header {
    background: #f4f4f4;
    text-align: center;
    padding: 2em;
  }

  header img {
    max-width: 96px;
  }

  header h1 {
    font-size: 2.5em;
  }

  h1,
  h2 {
    text-align: center;
  }

  label {
    display: block;
    margin-bottom: 0.5em;
  }

  .new-member-form {
    margin: 2em 0 4em 0;
    text-align: center;
  }

  .member-item {
    padding: 0.25em 0;
  }

  footer {
    margin-top: 2em;
    text-align: center;
    color: #fff;
    background: #f76c6c;
    padding: 0.25em 0;
    position:absolute;
    width:100%;
    bottom:0;
  }

  #col {
    column-count: 3;
  }
</style>