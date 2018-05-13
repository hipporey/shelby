<?php

$calendrier = file_get_contents("planning.ics");
$regExpMatch = "/SUMMARY:(.*)/";
$regExpDate = "/DTSTART:(.*)/";
$regExpDesc = "/DTEND:(.*)/";

$n = preg_match_all($regExpMatch, $calendrier, $matchTableau, PREG_PATTERN_ORDER);
preg_match_all($regExpDate, $calendrier, $dateTableau, PREG_PATTERN_ORDER);
preg_match_all($regExpDesc, $calendrier, $descTableau, PREG_PATTERN_ORDER);

$tabDate  = array();
$tabHoraire = array();
$tabMatch = array();//nom des cours
$tabCours = array();
$tabProf = array();
$tabSalle = array();
$tabExamen = array();


foreach ($dateTableau[0] as $date)
{

	
// Récupération des données
$annee = substr($date, 8, 4);
$mois = substr($date, 12, 2);
$jour = substr($date, 14, 2);
$heure = substr($date, 17, 2);
$min = substr($date, 19, 2);
/*
$desc = substr($desc, 12);*/
$date = $annee."-".$mois."-".$jour;
$horaire = $heure.":".$min.":00";
//
// Affichage
$tabDate[] = $date;
$tabHoraire[] = $horaire;

}
$examen = 0;
foreach($matchTableau[0] as $match)
{
	$match = substr($match,8);
	$tabMatch[] = $match;

}

 for($i = 0; $i < count($tabMatch);$i++){
 	$test = explode("-", $tabMatch[$i]);
 	if(count($test) == 3)
 	{
	$nomCours = $test[0];
 	$nomProf = $test[1];
 	$salles = $test[2];
 	$examen = 0;
 	}
 	else if (count($test) == 2)
 	{
 		$nomCours = $test[0];
 		$examen = 1;

 	}
 	
 	$tabExamen[] = $examen;
 	$tabSalle[] = $salles;
 	$tabProf[] = $nomProf;
 	$tabCours[] = $nomCours;

 }






try{
	$bdd = new PDO('mysql:host=localhost;dbname=pjl3', 'root','Delta2811.');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


for($i = 0; $i < count($tabMatch);$i++){
	

 $bdd->exec('INSERT INTO planning(DateCours,Horaires,Cours,Examen,Salles,Prof) VALUES(\''.$tabDate[$i].'\',\''.$tabHoraire[$i].'\',\''.$tabCours[$i].'\','.$tabExamen[$i].',\''.$tabSalle[$i].'\',\''.$tabProf[$i].'\')');

}

echo "fin";


?>