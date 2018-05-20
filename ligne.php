
<?php
session_start();
//include 'bdd.php';


?>
<html>

		<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="planning.css" />
	<title>test ligne</title>
		</head>
	<body>


	<?php include'header.php';?>
	

	<div class="mainHome2">

		<div class="nav_Register">
		<p id="dynamique"></p>

		<div class = "inscriptionformat">

		<form action="ligne.php" method="post">
			ligne: <input type="text" id ="ligne" name="ligne" required="true">
		<button type= "submit" name= "Valider" >
		</form>
		
		
		</div>
<?php
		if (isset($_POST['ligne'])){
			$test1 = $_POST['ligne'];
			$test = array($_POST['ligne']);
			$myJSON = json_encode($test);
?>

	<script>
function ajaxGet(url, callback) {
    var req = new XMLHttpRequest();
    req.open("GET", url);
    req.addEventListener("load", function () {
        if (req.status >= 200 && req.status < 400) {
            // Appelle la fonction callback en lui passant la réponse de la requête
			var myjson = JSON.parse(this.responseText);
            document.getElementById("dynamique").innerHTML = myjson;
        } else {
            console.error(req.status + " " + req.statusText + " " + url);
        }
    });
    req.addEventListener("error", function () {
        console.error("Erreur réseau avec l'URL " + url);
    });
    req.send(null);
}

function quemetros(reponse){

}

function afficher(reponse) {
	var myjson = JSON.parse(reponse);
document.getElementById("dynamique").innerHTML = myjson;
    console.log(myjson);

}
var metro_depart = "2";
var metro_fin = "4";


var lien = "https://api-ratp.pierre-grimaud.fr/v3/stations/metros/"+metro_depart+"?_format=json";

ajaxGet(lien, afficher);
var lien = "https://api-ratp.pierre-grimaud.fr/v3/stations/metros/"+metro_fin+"?_format=json";
ajaxGet(lien, afficher);

 <?php
}
?>

 </script>
 
 
		</div>
	</div>
	</body>
</html>

