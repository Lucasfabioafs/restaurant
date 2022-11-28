<html> 
<?php 
include('navbar.php');
?>
<body class="body">
<!--<form action="ajout_Menu.php" method="post">-->

<br>

<!-- /contenido de pagina, realmente no importa -->
<br>
	<center><b>Ajouter un menu</b></center>
 <br>

      <div class="container mt-2">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card px-7 py-5" id="form1">
          
                      <form method="POST" action="ajout_menu.php" enctype="multipart/form-data">
                     <center><div class="forms-inputs mb-1"> <span> Nourriture </span> <input autocomplete="off" type="radio" value="1" name="numType"> </center>
                     <center><div class="forms-inputs mb-1"> <span> Boisson </span> <input autocomplete="off" type="radio" value="2" name="numType"> </center>                 
                     <center><div class="forms-inputs mb-1"> <span>Nom</span> <input autocomplete="off" type="text" name="nomProduit"> </center>
                        
                     
                     <center><div class="forms-inputs mb-1"> <span> prix </span> <input autocomplete="off" type="text" name="prix"> </center>



                    <center><div class="forms-inputs mb-1"> <span> descriptif </span> <input autocomplete="off" type="text" name="descriptif"> </center>
                       <center><div class="forms-inputs mb-1">
                        
                        <input type="file" name="telechargement" value=""/>
                        Photo : <input type="submit" name="telecharger" class="button"  value="Ajouter"></center></form>

                    
                    
               
                
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php
include('footer.php');
?>
</html>
