<?php

	require 'connect.php';

	

	$username = $_POST['username'];
	$password = $_POST['password'];

	echo "$username";
	echo "$password";

	$query = "SELECT * FROM Dipendenti WHERE nomeUtente='$username' AND password='$password' ";

	$risultato = mysqli_query($con, $query);
	$row = mysqli_fetch_array($risultato);

	$newURL = "addBooks.php";

	if ($row['password'] == "") {
		echo "Credenziali sbagliate";
		//login non riuscito
	}else{
		session_start();
		$_SESSION['loginState'] = 'correct';
		header('Location: '.$newURL);
	}





?>