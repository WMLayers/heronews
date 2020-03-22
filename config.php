<?php

define('BASE_URL', 'http://localhost/projetox/heronews/');

global $pdo;

try{
	$pdo = new PDO("mysql:dbname=heronews;host=localhost", "root", "");
}catch(PDOException $e){
	echo "error: ".$e->getMessage();
}