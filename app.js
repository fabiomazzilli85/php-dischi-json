axios.get('server.php')
  .then(function (response) {
    // La pagina server.php è allo stesso livello di index.php
    console.log(response.data);
  })
  
  .catch(function (error) {
    // Gestisci gli errori
    console.error(error);
  });

