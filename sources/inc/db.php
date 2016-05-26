<?php

// Je me connecte à la DB
$dsn = 'mysql:host=localhost;dbname=formation;charset=utf8';

try {
	$pdo = new PDO($dsn, 'root', 'totowf3');
}
catch(Exception $e) {
	//emailAlerte($e->getMessage());
	echo 'connexion impossible';
	exit;
}