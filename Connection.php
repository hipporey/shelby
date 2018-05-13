<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=gestion_etudiant;charset=utf8', 'root', '');

?>  

<?php include("bdd.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="planning.css" />
	<title>Connection</title>
</head>
<body>
	<?php include("header.php"); ?>

	<nav class="nav_Login">
		
		<div class="Connection">

			<h1>Bienvenue</h1>
		
			<form action="login_function.php" method="post">
				E-mail: <input type="email" name="email" required="true"><br>
				password: <input type="password" name="password" required="true"><br>
				<button type="submit" id="login-button">Connection</button>
			</form>

				<div>
			<h5>Vous n'avez pas encore de compte ?</h5>
			<a href="inscription.php">s'inscrire</a>
				</div>

		</div>
		<?php if(isset($_POST['email']) && isset($_POST['password']))
			{
				echo 'Vous vous etes trompe de mot de passe ou identifiant';
				
			}
			?>
	</nav>


</body>
</html>