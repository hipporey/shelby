<?php

session_start();

?>

<?php

include ("bdd.php");

if(isset($_POST['email']) && isset($_POST['password'])){

	    // Check that user exists
		$test = $bdd->prepare('SELECT * FROM user WHERE email = :email AND mdp = :password');
	    $test->execute(array('email' => $_POST['email'], 'password' => $_POST['password']));
	     $users = $test->fetch();
		if ($users[1] != null && $users[3] != null ){
			$_SESSION['user_id']=$users['iduser'];
			$_SESSION['user_nom']=$users['nom'];
			$_SESSION['user_prenom']=$users['prenom'];
			$_SESSION['user_numtel']=$users['numtel'];
			$_SESSION['user_dob']=$users['datenaissance'];
				$_SESSION['user_mail'] = $users['email'];
			$_SESSION['user_password'] = $users['mdp'];
			$_SESSION['is_admin'] = $users['admin'];
			$test->closeCursor();

			header('Location: calendrier.php');

		}

		else{
			header('Location: Connection2.php');
		}
	}
?>
