<?php
include("bdd.php");
?>
<!DOCTYPE html>

<html>

		<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="planning.css" />
	<title>Ajouter evenement</title>
		</head>

	<body>


	<?php include'header.php';?>

<body>

    <script src = "salut.js"></script>

</body>

<?php
	if(isset($_POST['nomE']) && isset($_POST['Type']) &&  isset($_POST['date']) && isset($_POST['adresse']) && isset($_POST['horaired'])){
		echo "salut";
	}
?>

<div class="mainHome2">

		<div class="nav_Register">

		<div class = "inscriptionformat">

	<form method="post" action="ajouterE.php">
 

		   <label for="Evenement">Nom de l'evenement </label>
		   <input type="text" name="nomE" id="nomE" required=true/></br>
	 
       <label for="TypeE">Type evenement </label>
       <input type="text" name="Type" id="Type" required=true/></br>
	   
	    <label for="adresse">adresse de l'evenement</label>
       <input type="text" name="adresse" id="adresse" required=true /></br>
	   
	   
	   <label for="Date">date de l'evenement</label>
       <input type="date" name="date" id="date" required=true /></br>
	   
	   
	   
	   <label for="Horaired">Debut evenement</label>
       <input type="time" name="horaired" id="horaired" /></br>
	   <!--  deux possibilite, soit on affiche les tranches d'horaires disponibles a l'utilisateur  mais lui dire que si c'est un deplacement prevoire 30 min de trajet
²		du coup trouver les tranches horaires dispos et ensuite les afficher, ou alors montrer le calendrier de la journée et le laisser choisir l'evenement
		si il veut modifier un evenement 
	   -->
	   
	   <label for="submit"></label>
	   <input type="submit" name="submit" id="sub">
	   
   </p>
   </div>
    </div>
	 </div>
   

	   
</form>
</html>