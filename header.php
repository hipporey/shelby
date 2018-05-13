<header>
		<div class = "head">

			<div class = "menu">

				<div><a class = "menu-Element " href="Itineraire.php" title="Itineraire"> Itineraire </a></div>
				<div><a class = "menu-Element" href="calendrier.php" title="Calendrier"> Calendrier </a></div>
				<div><a class = "menu-Element" href="ajouterE.php" title="AddE"> Ajout evenement </a></div>


			</div>
			<?php
			if(isset($_SESSION['user_mail'])){
				echo'
				<div class = "login">
					<a class = "login-intern" href="deconnexion.php" title="mon compte"> deconnexion</a>
				</div>
				<div class = "login">
					<a class = "login-intern" href="ClientPage1.php" title="mon compte"> Tableau de bord</a>
				</div>
				';
			}
			else {
				echo'
				<div class = "login">
					<a class = "login-intern" href="Connection.php" title="mon compte"> Connection</a>
					<a class = "login-intern" href="inscription.php" title="mon compte"> Register </a>
				</div>
				';
			}
			?>

		</div>

	</header>
