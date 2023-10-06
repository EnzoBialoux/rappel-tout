<?php

session_start();    
include'materiel.php';
$nomMat = $_POST['nomMat'];
$refMat = $_POST['refMat'];


$materiel=new materiel($nomMat, $refMat);

echo $nomMat;
echo $refMat;

$materiel->create();

?>