<?php
include'document.php';

$refDoc = $_POST['refDoc'];
$dateFindevalidite = $_POST['dateFindevalidite'];
$dateDoc = $_POST['dateDoc'];
$refMat = $_POST['refMat'];

$document=new document($refDoc, $dateFindevalidite, $dateDoc, $refMat);

echo $refDoc;
echo $dateFindevalidite;
echo $dateDoc;
echo $refMat;

$document-> create();

?>