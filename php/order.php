<?php
	
	require_once "connect.php";

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$query = $connect->prepare("INSERT INTO `order` (name, phone, message) VALUES (?, ?, ?)");

	$query->bindParam(1, $name);  
	$query->bindParam(2, $phone);  
	$query->bindParam(3, $message); 

	$query->execute();

	header('Location: ../index.html');