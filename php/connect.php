<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "delivery";

try {  
	$connect = new PDO("mysql:host=$host;dbname=$database", $user, $pass);   
}  
catch(PDOException $e) {  
	echo $e->getMessage();  
}