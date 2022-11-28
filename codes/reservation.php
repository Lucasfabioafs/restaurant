<html>
<?php 
include('navbar.php');
?>
<?php
error_reporting(0);
?>
<body class="body">
<div class="titreproduits" >
        <br>
        <center><h2 id="Produits" class="h2P">Etat des réservations</h2></center>
    </div>
<section style="
width: 50%;float: right;
margin-right:15px;

width: 50%;">
    <div class="row">
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
<?php

    include('bibliotheque.php');
    $requete = "SELECT * FROM reservation;";
                                $connexion = connecter();
                                $resultat = mysqli_query($connexion, $requete);
                                $ligne = mysqli_fetch_assoc($resultat);
                                $nomReservation=$_POST['nomReservation'];
                                $heure=$_POST['heure'];
                                $nbPersonne=$_POST['nbPersonne'];
                                mysqli_close($connexion);
?><table style="border: medium solid #000000;
width: 50%;"><th>nom de la réservation</th><td>  Heure</th><th>nombre de personne</th><?php
while ($ligne = mysqli_fetch_assoc($resultat))
{?>

<br>  
                        
   <tr>
       <td >  <?php echo $ligne['nomReservation']?></td>
       <td>  <?php echo $ligne['heure']?></td>
       <td></td>
       <td>  <?php echo $ligne['nbPersonne']?></td>

   </tr>
               
           
                        
    
                         
                    
                    
    <?php }
    ?></div>
</section>
</body>

</html>