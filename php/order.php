<?php
	
	require_once "connect.php";

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	mysqli_query($connect, "INSERT INTO `order` (name, phone, message) VALUES ('{$name}', '{$phone}', '{$message}')");

	// header('Location: ../index.html');