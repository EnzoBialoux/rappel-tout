	<?php
			
		session_start();
		
			
		?>
		
		<!DOCTYPE HTML>

<html>

	<head>
		<meta charset="utf-8">
		<title>Rappels</title>
		<link rel="stylesheet" href="style.css">
	</head>


	<body>

	<div class=entete>
	<a href="rappel.php"><img src = "images/Rappel.png" alt="rappel" /></a>
		<center><h1>RAPPEL</h1></center> <hr></div>
		<center><a TYPE="button" href="saisieMat.php">Matériels</a></center>
		<center><a TYPE="button" href="saisieDoc.php">Documents</a></center>

		
		<br><br>
		<form method="post" action='connexion.php'>

				<h2>Maintenance sur</h2> <input type="text" placeholder="Entrez nom  du materiel" class="form-control" id="nommat" name="nommat">,
				<input type="text" placeholder="Entrez la reference" class="form-control" id="reference" name="reference"> <h2>avant le :</h2>
			<input type="date" placeholder="Entrez la date de maintenance" class="form-control" id="maintenance" name="maintenance">
			<INPUT TYPE="button" NAME="bouton" VALUE="Continuer" >
			<?php
				echo $_SESSION[nomMat];
			?>
		</form>
		<div id='footer'></div>
				
	</body>

</html>