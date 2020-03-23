<?php

$environment = 'off';

if($environment == 'off'){
	$base = 'http://localhost/projetox/heronews/';
	$dbname = "mysql:dbname=heronews;host=localhost";
	$user = "root";
	$pass = "";
}else if($environment == 'online'){
	$base = 'https://heronew.000webhostapp.com/';
	$dbname = "mysql:dbname=***********;host=localhost";
	$user = "***************";
	$pass = "***********";
}

define('BASE_URL', $base);

global $pdo;

try{
	$pdo = new PDO($dbname, $user, $pass);
}catch(PDOException $e){
	echo "error: ".$e->getMessage();
}

error_reporting(E_ALL);
ini_set("display_errors", "On");