<?php
//fonction permettant de se connecter à la bdd
function connecter()
  {
    $hote       = 'localhost';
    $utilisateur= 'root';
    $passe      = 'root';
    $base       = 'restaurant';
 $connexion  = mysqli_connect($hote,$utilisateur,$passe,$base);
// instruction qui permet de conserver les accents lors de la connexion au serveur de bases de données
    mysqli_query($connexion, 'SET NAMES UTF8');
    return $connexion;
  }
?>