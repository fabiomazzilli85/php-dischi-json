<template>
</template>

<script>
import axios from 'axios';

export default {
  mounted() {
    axios.get('server.php')
      .then(response => {
        // La pagina server.php è allo stesso livello di index.php
        console.log(response.data);
      })
      .catch(error => {
        // Gestisci gli errori
        console.error(error);
      });
  }
}
</script>
