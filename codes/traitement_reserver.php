<?php
	// activation du mécanisme des sessions
	session_start();

include('bibliotheque.php');

    $nomReservation=$_POST['nomReservation'];
    $heure=$_POST['heure'];
    $nbPersonne=$_POST['nbPersonne'];
	
/*On fait une requête pour s’assurer que le pseudo n’existe pas dans la bdd
Requête qui cherche le pseudo dans la bdd*/
$requete ="SELECT heure;
		   	FROM reservation
			WHERE heure='$heure'";

// connexion à la base de données
	$connexion = connecter();
		
	//Exécution de la requête
	$resultat = mysqli_query($connexion, $requete);
		
	//Fermeture de la bdd
	mysqli_close($connexion);


if (mysqli_num_rows($resultat) == 0)
  { 


		 
	// requête d'ajout dans la base de données
$requete = "INSERT INTO reservation (nomReservation, heure, nbPersonne)
VALUES ( '$nomReservation', '$heure', '$nbPersonne');";

	// connexion à la base de données
	$connexion = connecter();
		
	//Exécution de la requête
	$resultat = mysqli_query($connexion, $requete);
		
	//Fermeture de la bdd
	mysqli_close($connexion);
	
	

	// et redirection vers l'accueil			 
	header ("Location: acceuil.php");
  }
  // sinon le pseudo existe déjà, affichage d’un message et lien de retour au formulaire
  else
	{
    echo '<a href=form_reservation.php >Cette horaire est déjà utilisé, cliquez ici pour retourner à la réservation <a> ';

	}

?>