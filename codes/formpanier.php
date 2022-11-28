<?php
include('bibliotheque.php');
	$id=$_GET['numProduit'];
	$requete="SELECT * from produit where numProduit='$numProduit'";
	$connexion=connecter();
	$resultat=mysql_query($connexion,$requete);
	mysql_close($connexion);
	$ligne=mysqli_fetch_assoc($resultat);
?>

<div id="produit">
	<h2><?php echo $ligne['designation'];?></h2>
	<img class="resize" src="images/<?php echo $ligne['image'];?>"alt="">
	<div ="descriptif">
	<p>
	<?php echo $ligne['descriptif'];?>
	</p>
	Prix unitaire : <?php echo en_euro($ligne['prix']);?>


	<form action="traitement_panier.php" method="post">


	<input type="hidden" name="numProduit" value="<?php echo $ligne["numProduit"];?>">

	<input type="hidden" name="designation" value="<?php echo $ligne["designation"];?>">

	<input type="hidden" name="prix" value="<?php echo $ligne["prix"];?>">

	<input type="number" name="quantite" min="1">

	<input type="submit" name="envoie" min="1">

</form>
</div>
</div>