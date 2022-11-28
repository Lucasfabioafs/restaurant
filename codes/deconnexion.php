<?php
session_start();
unset($_SESSION['pseudo']);
	header("Location: acceuil.php" );
?>
<script > 
	let reponse = confirm("etes vous sur de vouloir vous deconnecter")
if (reponse==true){
	unset($_SESSION['pseudo']);
	header("Location: acceuil.php" );
}
else{
	unset($_SESSION['pseudo']);
	header('Location: acceuil.php');
}

</script>


