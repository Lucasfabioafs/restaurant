<link rel="stylesheet" href="style.css"></head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<nav class="nav nav-pills nav-justified">
  
  <?php
  session_start();
  if (isset($_SESSION['pseudo'])){
  	if ($_SESSION['pseudo']=='admin'){

  		echo'<a class="nav-item nav-link " href="acceuil.php">Accueil</a>
  	<a class="nav-item nav-link" href="menu.php">Menu</a>
  	<a class="nav-item nav-link disabled" href="deconnexion.php">deconnexion</a>;';

  		echo '<nav id="menu" class="left show">
		  <ul>
		    <li><a href="admin.php" class="fa fa-info-circle"><i class="fa fa-home"></i>Accueil Admin</a></li>
		    <li><a href="menu.php"><i class="fa fa-info-circle"></i>Menu</a></li>
		    <li><a href="form_ajoutMenu.php"><i class="fa fa-info-circle"></i>Ajouter un Menu</a></li>
		    <li><a href="form_delMenu.php"><i class="fa fa-info-circle"></i>Supprimer Menu</a></li>
		    <li><a href="reservation.php"><i class="fa fa-phone"></i>Réservation</a></li>
		  </ul>
		  <a href="#" id="showmenu">
		    <i class="fa fa-align-justify"></i>
		  </a>
		</nav>';}
		else{

  	echo '<a class="nav-item nav-link active" href="acceuil.php">Accueil</a>
  <a class="nav-item nav-link" href="menu.php">Menu</a>
   <a class="nav-item nav-link" href="form_reservation.php">Réserver </a>
  <a class="nav-item nav-link" href="moncompte.php">Mon Compte</a>
 
  	 <a class="nav-item nav-link disabled" href="deconnexion.php">deconnexion</a>;';
  }
  	

  	}

  
  else {
  	echo '<a class="nav-item nav-link active" href="acceuil.php">Accueil</a>
  	<a class="nav-item nav-link" href="menu.php">Menu</a>
  	<a class="nav-item nav-link disabled" href="connexion_inscription.php">Connexion</a>;';
  }

?>
</nav>
