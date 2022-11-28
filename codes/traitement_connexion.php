<?php

session_start();

include('bibliotheque.php');

$mdp = $_POST['mdp'];
$pseudo = $_POST['pseudo'];
    
    
   
    $requete ="SELECT pseudo , mdp
            FROM client
            WHERE pseudo='$pseudo';";
            
  
    $connexion = connecter();
    
    
    $resultat = mysqli_query($connexion, $requete); 
        
    
    if (mysqli_num_rows($resultat) == 0)
        {header("Location: connexion_inscription.php" );}
    
   
    else
        {   
         
        
        $ligne = mysqli_fetch_assoc($resultat);
        $mdph = $ligne['mdp'] ;

        

            if (password_verify($mdp,$mdph))
            {
				$_SESSION['pseudo'] = $pseudo;	
				switch ($pseudo) {
					case 'admin': header ("Location: admin.php");
					break;
					default: header ("Location: acceuil.php");
					break;
				}
            }
        
            else
            {
				header ("Location: connexion_inscription.php");
            }
        }
     
?>
