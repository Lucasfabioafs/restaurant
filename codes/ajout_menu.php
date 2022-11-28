<?php
	// activation du mécanisme des sessions
	session_start();

include('bibliotheque.php');

    $nomProduit = $_POST['nomProduit'];
    $prix = $_POST['prix'];
    $descriptif = $_POST['descriptif'];
    $numType = $_POST['numType'];
    if (isset($_POST['telecharger'])){
    	$nomimage=$_FILES["telechargement"]["name"];
    	$tempname=$_FILES["telechargement"]["tmp_name"];
    	$dossier="image/".$nomimage;
    	if(move_uploaded_file($tempname, $dossier)){
    		$msg="image telecharger";
    	}
    	else{
    		$msg="erreur telecharment";
    	}
    	echo $msg;
    }
    
    
	
//On fait une requête pour s’assurer que le pseudo n’existe pas dans la bdd
//Requête qui cherche le pseudo dans la bdd
$requete ="SELECT nomProduit
		   	FROM produit
			WHERE nomProduit='$nomProduit'";

// connexion à la base de données
	$connexion = connecter();
		
	//Exécution de la requête
	$resultat = mysqli_query($connexion, $requete);
		
	//Fermeture de la bdd
	mysqli_close($connexion);


if (mysqli_num_rows($resultat) == 0)
  { 
// si le resultat est egal a 0 alors ce pseudo n’existe pas
//Hacher le mot de passe récupéré et le stocker dans une variable $mdph


		 
// requête d'ajout dans la base de données
$requete = "INSERT INTO produit (nomProduit, prix, numType,descriptif,image )
VALUES ( '$nomProduit', '$prix', '$numType', '$descriptif','$nomimage');";
var_dump($requete);
	// connexion à la base de données
	$connexion = connecter();
		
	//Exécution de la requête
	$resultat = mysqli_query($connexion, $requete);
		
	//Fermeture de la bdd
	mysqli_close($connexion);
	
	// Ouverture d’une session pour ce pseudo
	//$_SESSION['pseudo']= $pseudo;

	// et redirection vers l'accueil	
	 
	header ("Location: admin.php");
	
  }
  // sinon le pseudo existe déjà, affichage d’un message et lien de retour au formulaire
  else
	{
		header ("Location: form_ajoutMenu.php");
    echo 'Ce nom est déjà utilisé ';

	}

?>