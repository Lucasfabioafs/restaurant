<html>
<?php 
include('navbar.php');
?>
<div class="titreproduits">
        <br>
        <center><h2 id="Produits" class="h2P">Découvrez nos produit delicieux disponible sur place uniquement</h2></center>

    </div>
<section class="container-fluid about">
    <div class="row">
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <body class="body">
    <center><h3>Connecter vous pour réserver une table !</h3></center>
    
<?php
    include('bibliotheque.php');
    $requete = "SELECT * FROM produit;";
                                $connexion = connecter();
                                $resultat = mysqli_query($connexion, $requete);
                                $ligne = mysqli_fetch_assoc($resultat);
                                $nomProduit=$ligne['nomProduit'];
                                $prix=$ligne['prix'];
                                $descriptif=$ligne['descriptif'];
                                $image=$ligne['image'];
                                mysqli_close($connexion);

while ($ligne = mysqli_fetch_assoc($resultat))
{?>
                    
                        <br>  
                        
                        <button  class="btn btn-light"> 
                            <div class="card" >
                              <img class="card-img-top" src="image/<?php echo $ligne['image']?>" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title" ><?php echo $ligne['nomProduit'];?></h5>
                                <p class="card-text text-wrap"><?php echo $ligne['descriptif'];?></p>
                              </div>
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item">Ajouter au panier (bientôt)</li>
                              </ul>
                          
                                <a href="#" class="card-link"><?php echo $ligne['prix'];?>€</a>
                                
                              </div>
    </div>
                         
                    
                    
    <?php }
    ?></div>
</section>
</body>
<?php
include('footer.php');
?>
</html>