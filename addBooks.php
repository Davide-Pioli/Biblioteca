<!DOCTYPE html>
<html>
<head>
	<title>Davide Library</title>
</head>
<body>
	<?php
		session_start();
		if(isset($_SESSION['loginState'])){
			echo "
				<h1>Inserisci libri nel database</h1>
				<input id='search' type='text' placeholder='ISBN...''>
				<button id='button' type='button'> Conferma </button>

				<div id='results'> </div>

				<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
				<script src='scripts/main.js'></script>
			";
		}else{
			echo "EH, VOLEVIH!";
		}
	?>
	
</body>
</html>