<?php

	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "delivery";

	$connect = mysqli_connect($host, $user, $password, $database);

	if (!$connect)
	{
		die("Ошибка подключения к базе данных!");
	}