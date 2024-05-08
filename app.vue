<template>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      dischi: [] // Inizializza l'array vuoto
    };
  },
  mounted() {
    axios.get('server.php')
      .then(response => {
        this.dischi = response.data.result;
      })
      .catch(error => {
        console.error(error);
      });
  }
}
</script>