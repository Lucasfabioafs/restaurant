<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form action="traitement_inscription.php" method="post">
  <fieldset>
    
	<center><b>Inscrivez-vous</b></center>
 
      <div class="container mt-2">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card px-7 py-5" id="form1">
                <div class="form-data" v-if="!submitted">
                                      
                     <center><div class="forms-inputs mb-1"> <span> Votre nom  </span> <input autocomplete="off" type="text" name="nom"> </center>
                        
                    
                     <center><div class="forms-inputs mb-1"> <span> Votre prénom </span> <input autocomplete="off" type="text" name="prenom"> </center>
                    <center><div class="forms-inputs mb-1"> <span> Votre Pseudo </span> <input autocomplete="off" type="text" name="pseudo"> </center>
                    
                     <center><div class="forms-inputs mb-2"> <span>Mot de passe</span> <input autocomplete="off" type="password" v-model="password" v-bind:class="{'form-control':true, 'is-invalid' : !validPassword(password) && passwordBlured}" v-on:blur="passwordBlured = true" name="mdp">
                        <div class="invalid-feedback"> 8 charactere minimum!</div>
                      <center><div class="forms-inputs mb-1"> <span> telephone </span> <input autocomplete="off" type="text" name="tel"> </center>
                    
                     <center><div class="forms-inputs mb-1"> <span> votre ville</span> <input autocomplete="off" type="text" name="ville"> </center>
                        
                    
                     <center><div class="forms-inputs mb-1"> <span> votre rue</span> <input autocomplete="off" type="text" name="rue"> </center>
                        
                    
                     <center><div class="forms-inputs mb-1"> <span> code postal</span> <input autocomplete="off" type="text" name="cp"> </center>
                        
                    
                    
                    </div></center>
                    <div class="mb-3"> <button v-on:click.stop.prevent="submit" class="btn btn-dark w-100" name="envoi">S'inscrire</button> </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>
	<!--  Nom : <input type="text" name="nom" size="32" maxlength="32"> <br><br>
      Prénom :  <input type="text" name="prenom" size="32" maxlength="32"> <br><br>
      Pseudo :  <input  name="pseudo" size="32" maxlength="32"><br><br>
      Mot de passe : <input type="password" name="mdp" size="32" maxlength="12"> <br><br>
      Numéro de Téléphone : <input  name="tel" size="12" maxlength="12"><br><br>
      Ville :  <input type="text" name="ville" size="32" maxlength="32"> <br><br>
	  Rue :  <input type="text" name="rue" size="32" maxlength="32"> <br><br>
      Code Postal : <input type="number" name="cp" size="32" maxlength="32"> <br><br>
	  <input type="submit" name="envoi" value="S'inscrire"> <br>
	  
  </fieldset>

</form>
</html>
  -->