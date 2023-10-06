<!DOCTYPE HTML>

<html>

<head>
    <meta charset="utf-8">
	<title>Documents</title>
	<link rel="stylesheet" href="style.css">
</head>


<body>

	<div class=entete>
    <a href="rappel.php"><img src = "images/Rappel.png" alt="rappel" /></a>
	<h1>DOCUMENTS</h1> <hr></div>

	<br><br>
	<form method="post" action='validationDoc.php'>

    <h2>Référence de votre Document :</h2> <input type="text" placeholder="Entrez la référence du document" class="form-control" id="refDoc" name="refDoc">,
    <h2>Date de votre Document :</h2><input type="date" placeholder="Entrez la date" class="form-control" id="dateDoc" name="dateDoc">,
    <h2>Date de Maintenance de votre Document :</h2><input type="date" placeholder="Entrez la date de maintenance" class="form-control" id="dateFindevalidite" name="dateFindevalidite">,
    <h2>Référence du Matériel :</h2><input type="text" placeholder="Entrez la référence du matériel" class="form-control" id="refMat" name="refMat">
    </br>
	<INPUT TYPE="submit" NAME="bouton" VALUE="Continuer" >

	</form>
	<div id='footer'></div>
			
</body>

</html>