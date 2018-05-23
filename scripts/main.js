function booksearch(){

	var search = document.getElementById('search').value
	document.getElementById('results').innerHTML = "";
	console.log(search);

	$.ajax({
		url: "https://www.googleapis.com/books/v1/volumes?q=isbn:" + search, 
		dataType: "json",
		success: function(data){

			var xhr = new XMLHttpRequest();
			xhr.open("POST", "/Biblioteca/saveData.php", true);
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			//xhr.send("codice_isbn=" + data.items[0].volumeInfo.industryIdentifiers[0].identifier);
			
			xhr.send("codice_isbn=" + data.items[0].volumeInfo.industryIdentifiers[0].identifier + 
				"&titolo=" + data.items[0].volumeInfo.title +
				"&autore=" + data.items[0].volumeInfo.authors[0] + 
				"&genere=" + data.items[0].volumeInfo.categories[0] +
				"&dataEdizione=" + data.items[0].volumeInfo.publishedDate +
				"&imageLink=" + data.items[0].volumeInfo.imageLinks.thumbnail);
			

			console.log(data.items[0].volumeInfo.title);
			console.log(data.items[0].volumeInfo.industryIdentifiers[0].identifier);
			console.log(data.items[0].volumeInfo.authors[0]);
			console.log(data.items[0].volumeInfo.categories[0]);
			console.log(data.items[0].volumeInfo.categories[0]);

		},
		type: 'GET'
	})


}

document.getElementById('button').addEventListener('click', booksearch, false);