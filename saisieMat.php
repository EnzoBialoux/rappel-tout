<!DOCTYPE HTML>

<html>

	<head>
		<meta charset="utf-8">
		<title>Materiels</title>
		<link rel="stylesheet" href="style.css">
	</head>


	<body>

		<div class=entete>
		<a href="rappel.php"><img src = "images/Rappel.png" alt="rappel" /></a>
		<center><h1>MATERIELS</h1></center> <hr></div>
		<br><br>
		<form method="POST" action='validationMat.php'>

			<h2>Référence de votre Matériel :</h2><input type="text" placeholder="Entrez la reference" class="form-control" id="refMat" name="refMat">
			<h2>Nom de votre Matériel :</h2> <input type="text" placeholder="Entrez nom  du materiel" class="form-control" id="nomMat" name="nomMat">	
			<input TYPE="submit" NAME="bouton" VALUE="Continuer" >

		</form>
		<div id='footer'></div>
					
	</body>

</html>