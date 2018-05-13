<?php
include 'inscription.php';
include 'bdd.php';


if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['numb'])){
	$now = date('Y-m-d');
	try {
		$sql = $bdd->prepare("INSERT INTO user (email, dateinscription, mdp, nom, prenom, numtel, datenaissance) VALUES (:MAILL, :INSCR, :MDP, :LAST, :FIRST, :TEL, :BIRTH)");
	    $sql->execute(array('MAILL'=> $_POST['email'] ,'INSCR'=> $now,'MDP'=>$_POST['password'], 'LAST'=>$_POST['lastname'], 'FIRST'=>$_POST['firstname'], 'TEL'=>$_POST['numb'], 'BIRTH'=>$_POST['birth']));
	    echo "New account created successfully. You can now login.\n";
	}
	catch(PDOException $e)
	    {
	    echo $sql . ": " . $e->getMessage();
	}
	header('connection.php');
}
else {
	header('connection.php');
}
?>

