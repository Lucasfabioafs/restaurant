
<?php

include('bibliotheque.php');

$numClient=$_POST['numClient'];
$numTel=$_POST['tel'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$cp=$_POST['cp'];
$rue=$_POST['rue'];
$ville=$_POST['ville'];
$mdp=$_POST['mdp'];
$mdph = password_hash($mdp, PASSWORD_DEFAULT);

$requete= "UPDATE client SET nom='$nom' , prenom='$prenom' , cp='$cp' , rue='$rue' , ville='$ville' , mdp='$mdph', numTel='$numTel' WHERE numClient= '$numClient' ";
$connexion=connecter();
$resultat = mysqli_query($connexion, $requete);
?>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<nav class="nav nav-pills nav-justified">
  <a class="nav-item nav-link active" href="acceuil.php">Acceuil</a>
  <a class="nav-item nav-link" href="menu.php">Menu</a>
  <a class="nav-item nav-link" href="moncompte.php">Mon Compte</a>
    <?php
  session_start();
  if (isset($_SESSION['pseudo'])):?>
  <a class="nav-item nav-link disabled" href="deconnexion.php">deconnexion</a>;
<?php else : ?>
  <a class="nav-item nav-link disabled" href="connexion_inscription.php">Connexion</a>;
<?php endif; ?>


</nav>
<br>
<br>
<br>
<center><h1>Vos information ont bien été mise à jours <br> <a href="acceuil.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Retour menu</button></a>
</h1></center>
</html>

