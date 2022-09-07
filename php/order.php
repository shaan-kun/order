<?php

	require_once "connect.php";

	$name = $_POST['name'];
	$entity = $_POST['entity'];
	$contract = ($entity == 'legal') ? $_POST['contract'] : '';
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$query = $connect->prepare("INSERT INTO `order` (name, entity, contract, phone, message) VALUES (?, ?, ?, ?, ?)");

	$query->bindParam(1, $name);  
	$query->bindParam(2, $entity);  
	$query->bindParam(3, $contract);
	$query->bindParam(4, $phone);  
	$query->bindParam(5, $message); 

	$query->execute();

	header('Location: ../index.html');
