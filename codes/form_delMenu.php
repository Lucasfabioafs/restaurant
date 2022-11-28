<?php 
    include('navbar.php')
?>


<body class="body">
<?php
  include('bibliotheque.php');
  $requete = "SELECT numProduit,nomProduit,numType,descriptif,prix 
          FROM produit ;";
?>
<form action="delMenu.php" method="post">

  <center><label for="pays">nom du plat a supprimer</label><br />
<select name="numProduit">

<?php

$connexion = connecter();
  
//Exécution de la requête
$resultat = mysqli_query($connexion, $requete);
  
//Fermeture de la bdd
mysqli_close($connexion);


  while ($ligne = mysqli_fetch_assoc($resultat))
  {
?>
  <option value="<?php echo $ligne['numProduit']; ?>"> 
<?php 
  echo $ligne['nomProduit']; 
  ?></option>
<?php
  } 
?>
</select>
<br>
<center><input type="submit" value="supprimer"></center>
</form>
</body>
<?php
include('footer.php');
?>