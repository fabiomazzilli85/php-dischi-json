<?php


// Questa riga permette a qualsiasi dominio di accedere a questo script. Non pare una cosa sicura, vediamo...
header("Access-Control-Allow-Origin: *");


$response = array(
  "message" => "Ciao, Fabio."
);


echo json_encode($response);
?>
