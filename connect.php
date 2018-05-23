<?php
	$con = mysqli_connect('127.0.0.1', 'root', '');
	if(!$con){
		echo "Connessione al database fallita"; 
	}

	if(!mysqli_select_db($con, 'Biblioteca')){
		echo "errore nella selezione del database";
	}
?>
	