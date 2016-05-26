<?php

// Je crée PDO
require 'inc/db.php';

// J'écris ma requête
$sql = '
	SELECT ses_opening, ses_ending, ses_id
	FROM session
';
$pdoStatement = $pdo->query($sql);

// Si erreur
if ($pdoStatement === false) {
	print_r($pdo->errorInfo());
}
// sinon
else {
	// Je récupère toutes les données
	$sessionList = $pdoStatement->fetchAll();
	//print_r($sessionList);
}

/*
$maDateFromDb = '2015-04-01';
// FACON 1
$jour = $maDateFromDb[8].$maDateFromDb[9];
$mois = $maDateFromDb[5].$maDateFromDb[6];
echo $jour.'<br/>';
echo $mois.'<br/>';

// FACON 2
// J'extrais les 2 caractères à partir de l'index 8
$jour = substr($maDateFromDb, 8, 2);
// J'extrais les 2 caractères à partir de l'index 5
$mois = substr($maDateFromDb, 5, 2);
echo $jour.'<br/>';
echo $mois.'<br/>';*/

// J'affiche ma page
require 'inc/header.php';
require 'inc/index_view.php';
require 'inc/footer.php';