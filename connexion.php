<?php
try{
    /* Connexion à la bdd */
    $connex = new PDO('mysql:host=localhost;dbname=Rappel', 'Enzo','caribou');
    $connex->exec('SET NAMES "UTF8"');
} catch (PDOException $e){
    echo 'Erreur : '. $e->getMessage();
    die();
}
?>