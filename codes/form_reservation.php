<html>
<?php
include('navbar.php');
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form action="traitement_reserver.php" method="post">
  <fieldset>
    
	<center><b>Réserver une table</b></center>
    <body class="body">


   
 
      <div class="container mt-2">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card px-7 py-5" id="form1">
                <div class="form-data" v-if="!submitted">
                                      
                     <center><div class="forms-inputs mb-1"> <span> Nom de la réservation  </span> <input autocomplete="off" type="text" name="nomReservation"></div> </center>

                     <center><div class="forms-inputs mb-1"> <span> Heure de la réservation </span> <input autocomplete="off" type="time" name="heure"></div> </center>
                        
                    
                     <center><div class="forms-inputs mb-1"> <span> Nombre de personnes </span> <input autocomplete="off" type="text" name="nbPersonne"> </div></center>
                    <div class="mb-3"> <button v-on:click.stop.prevent="submit" class="btn btn-dark w-100" name="envoi">Réserver</button> </div>
                    
                
                </div>
            </div>
        </div>
    </div>
</div>
 </body>
 </fieldset>
</form>
<?php
include('footer.php');
?>
</html>