<!DOCTYPE html>
<html>
<head>
	<title>Davide Library</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yeseva One">
	<link rel="stylesheet" type="text/css" href="styles/home.css">
	<style type="text/css">
		#titolo {display:inline-block; margin-left: 300px} 
		#button {display:inline-block; margin-left: 180px} 

		a{
			text-decoration: none;
			color:rgb(76,104,120);
		}
	</style>
</head>
<body>
	<span>

		<h1 id = 'titolo' class="center"><a href='index.php'>Davide's Library </a></h1>

		<a href="login.php"> <button id='button' type='button'> Sign in </button></a>
		<!-- <button  class="button">Button</button> -->
	</span>

	<div class="sticky">
		<form class="center" method="POST" action="index.php">
			<input class="sticky" type="text" name="search" placeholder="Search..">
  			<input class="button" type="submit" name="cerca" value="cerca">
		</form>

	</div>

	<?php
		session_start();
		session_destroy();

		if(isset($_POST['search']) AND $_POST['search']!=""){

			$ricerca = $_POST['search'];

			echo "<p class='center risultati'>risultati per '$ricerca'</p>";

			require 'connect.php';

			$query = "SELECT * FROM Libri";

			$result = mysqli_query($con, $query);

			while ($row = mysqli_fetch_array($result)) {

				$title = strtolower($row['titolo']);

				$ricerca = strtolower($ricerca);

				if (strpos($title, $ricerca) === 0) {

					echo "<div class='center list'>
					  <ul>
					  	<a href=''>
					  		<li>
					      	<img src='{$row['link_immagine']}'/>
					      	<h3 class='title'>{$row['titolo']}</h3>
					      	<h4 class='author'>{$row['autore']}</h4>
					      	<h4 class='genre'>{$row['genere']} </h4>
					      	<h4 class='anno'>{$row['anno']} </h4>
					    </li>
					  	</a>
					  </ul>
					</div>";
				    
				}
			}

		}else{

			require 'connect.php';

			$query = "SELECT * FROM Libri";

			$result = mysqli_query($con, $query);

			while ($row = mysqli_fetch_array($result)) {
				echo "<div class='center list'>
					  <ul>
					  	<a href=''>
					  		<li>
					      	<img src='{$row['link_immagine']}'/>
					      	<h3 class='title'>{$row['titolo']}</h3>
					      	<h4 class='author'>{$row['autore']}</h4>
					      	<h4 class='genre'>{$row['genere']} </h4>
					      	<h4 class='anno'>{$row['anno']} </h4>
					    </li>
					  	</a>
					  </ul>
					</div>";
			}
		}
	?>

</body>

</html>