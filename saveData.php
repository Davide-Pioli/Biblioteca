<?php
	
	require 'connect.php';

	$codice_isbn = $_POST['codice_isbn'];
	$titolo = $_POST['titolo'];
	$autore = $_POST['autore'];
	$genere = $_POST['genere'];
	$dataEdizione = $_POST['dataEdizione'];
	$imageLink = $_POST['imageLink'];

	$imageLink .= "&printsec=frontcover&img=1&zoom=1&source=gbs_api";

	echo $codice_isbn;

	$query = "INSERT INTO Libri (codice_isbn, titolo, autore, genere, anno, link_immagine) VALUES (\"$codice_isbn\", \"$titolo\", \"$autore\", \"$genere\", \"$dataEdizione\", \"$imageLink\")";

	if(!mysqli_query($con, $query)){
		echo "inserimento fallito";
		echo mysqli_error($con);
	}


?>