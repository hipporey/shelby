
<?php
session_start();
include 'bdd.php';


?>
<html>

		<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="planning.css" />
	<title>Connection</title>
		</head>


	<body>


	<?php include'header.php';?>

	<div class="mainHome2">

		<div class="nav_Register">

		<div class = "inscriptionformat">

		<form action="inscription_function.php" method="post">
			firstname: <input type="text" name="firstname" required="true"><br>
			lastname: <input type="text" name="lastname" required="true"><br>
			E-mail: <input type="email" name="email" required="true"><br>
			password: <input type="password" name="password"><br>
			numero: <input type="tel" name="numb" required="true"><br>
			birthday :<input type="date" name="birth"><br>
			<input type="submit">
		</form>
</div>
</div>
	</div>

		
		<!--<?php include'footer.php';?> -->
	</body>
</html>

