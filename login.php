<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<link rel="stylesheet" type="text/css" href="styles/login.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yeseva One">
	<style type="text/css">
		#errore{
			font-size: 20px;
			color: red;
		}
	</style>
</head>
<body>

	<h1 id="titolo" class="center">Davide's Library</h1>
	<div class="login">
	<div class="lgn_left"><h1>login</h1><p>Inserisci il tuo username e la tua password</p>
	</div>
	<div class="lgn_right">
		<form action="login.php" method="post">
			<input class="field" type="text" placeholder="Username" id="username" name="username">  
	  		<input class="field" type="password" placeholder="Password" id="password" name="password">  
	  		<input class="btn" type="submit" value="LOGIN">
		</form>

		<?php
			session_start();
			session_destroy();

			if (isset($_POST['username']) AND isset($_POST['password'])) {

				require 'connect.php';

				$username = $_POST['username'];
				$password = $_POST['password'];

				$query = "SELECT * FROM Dipendenti WHERE nomeUtente='$username' AND password='$password' ";

				$risultato = mysqli_query($con, $query);
				$row = mysqli_fetch_array($risultato);

				$newURL = "addBooks.php";

				if ($row['password'] == "") {
			
					echo "<p id='errore'>I dati inseriti non sono corretti</p>";

				}else{
					session_start();
					$_SESSION['loginState'] = 'correct';
					header('Location: '.$newURL);
				}
				
			}

		?>
	  
	</div>
	</div>
</body>
</html>


