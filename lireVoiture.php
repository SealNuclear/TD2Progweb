<?php
include_once ("Model.php");
include_once ("Voiture.php");
$pdo = Model::getPdo();
$rep = $pdo->query("SELECT * FROM voiture");
$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
foreach ($tab_obj as $cle => $valeur) {
    $valeur->afficher();
}


?>
