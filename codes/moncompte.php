<html>
<head>
<title>Modifier mon compte</title>
</head>
<body class="body">
<?php 
include('navbar.php');
?>
<?php


include('bibliotheque.php');



$pseudo=$_SESSION['pseudo'];
$requete="SELECT * FROM client WHERE pseudo ='$pseudo'";
$connexion=connecter();
$resultat = mysqli_query($connexion, $requete);
$ligne= mysqli_fetch_assoc($resultat);
?>
<form action="traitement_modif_client.php"method="post">

  <div class="container mt-2">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card px-7 py-5" id="form1">
                <div class="form-data" v-if="!submitted">
                	<input type="hidden"name="numClient"value="<?=$ligne['numClient'];?>"/>
                                      
                     <center><div class="forms-inputs mb-1"> <span> Votre nom  </span> nom : <input type="text"name="nom"value=" <?= $ligne['nom'];?>"/></center>
                        
                    
                     <center><div class="forms-inputs mb-1"> <span> Votre prénom </span> <input type="text"name="prenom"value="<?= $ligne['prenom'];?>"/></center>
                    <center><div class="forms-inputs mb-1"> <span> Votre Pseudo </span> pseudo : <input type="text"name="pseudo"value="<?= $ligne['pseudo'];?>"/> </center>
                    
                     <center><div class="forms-inputs mb-2"> <span>Mot de passe</span><input type="password"name="mdp"value="<?= $ligne['mdp'];?>"/>
                        
                      <center><div class="forms-inputs mb-1"> <span> telephone </span> <input type="text"name="tel"value="<?= $ligne['numTel'];?>"/> </center>
                    
                     <center><div class="forms-inputs mb-1"> <span> votre ville</span> <input type="text"name="ville"value="<?= $ligne['ville'];?>"/> </center>
                        
                    
                     <center><div class="forms-inputs mb-1"> <span> votre rue</span>  <input type="text"name="rue"value="<?= $ligne['rue'];?>"/> </center>
                        
                    
                     <center><div class="forms-inputs mb-1"> <span> code postal</span> <input type="text"name="cp"value="<?= $ligne['cp'];?>"/> </center>
                        
                    
                    
                    </div></center>
                    <div class="mb-3"> <button v-on:click.stop.prevent="submit" class="btn btn-dark w-100" name="envoi">Modifier</button> </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>
</div>





<?php
include('footer.php');
?>

	
</form>