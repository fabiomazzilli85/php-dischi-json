const { createApp } = Vue;

createApp({
  data() {
    return {
      dischi: []
    };
  },
  
  mounted() {
    // Eseguo chiamata
    axios.get('server.php')
      .then(response => {
        // Ricevo i dati e li assegno alla variabile dischi
        this.dischi = response.data.result;
      })
      .catch(error => {
        // Gestisci gli errori
        console.error(error);
      });
  }
}).mount('#app');
