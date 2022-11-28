<?php
	

//fonction permettant de se connecter à la bdd
    include('bibliotheque.php');
  
	// récupération des valeurs envoyées grâce à la méthode POST
    $numProduit = $_POST['numProduit'];
	
		 
	// requête d'ajout dans la base de données
	$requete = "DELETE FROM produit 
                    where numProduit='$numProduit';";
				
	// connexion à la base de données
	$connexion = connecter();
		
	//Exécution de la requête
	$resultat = mysqli_query($connexion, $requete);
		
	//Fermeture de la bdd
	mysqli_close($connexion);
		
	header ("Location: form_delMenu.php");
?>
