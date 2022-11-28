<html>
<?php 
include('navbar.php');
?>
<body class="body">
</nav>
<br><br>
<form action="traitement_connexion.php" method="post">
  <fieldset>
    
	<center><b>Connectez-vous</b></center>
	<div class="container mt-2">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card px-5 py-5" id="form1">
                <div class="form-data" v-if="!submitted">
                    <center><div class="forms-inputs mb-4"> <span> Votre Pseudo</span> <input autocomplete="off" type="text" name="pseudo"> </center>
                        
                    </div>
                    <center><div class="forms-inputs mb-4"> <span>Mot de passe</span> <input autocomplete="off" type="password" v-model="password" v-bind:class="{'form-control':true, 'is-invalid' : !validPassword(password) && passwordBlured}" v-on:blur="passwordBlured = true" name="mdp">
                        <div class="invalid-feedback"> 8 charactere minimum!</div>
                    </div></center>
                    <div class="mb-3"> <button v-on:click.stop.prevent="submit" class="btn btn-dark w-100">Se connecter</button> </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
      
 
  </fieldset>

</form>
</body>
</html>