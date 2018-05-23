<!DOCTYPE html>
<html>
<head>
	<title>Davide Library</title>
	<link rel="stylesheet" type="text/css" href="styles/addBooks.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yeseva One">
</head>
<body>
	<?php
		session_start();
		if(isset($_SESSION['loginState'])){
			echo "
				<h1 id='titolo' class = 'center'>Davide's Library</h1>
				<h1 class = 'center' id = 'testo'>Inserisci libri nel database</h1>
				<div class = 'center'>
					<input class='center' id='search' type='text' placeholder='Inserisci un ISBN-10''>
					<button id='button' type='button'> Aggiungi </button>
				</div>

				<div id='results'> </div>
				<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
				<script src='scripts/main.js'></script>
			";

		}else{
			echo "accesso negato";
		}
	?>
	
</body>
</html>