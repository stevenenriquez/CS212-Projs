<!-- Steven Enriquez - Sign Up - Project 4 - selectBook.php -->

<!DOCTYPE html>

<html>

	<head>

    	<title> Proj 4: selectBook </title>

	</head>

	<body>

	</body>
		
	<h1> Select a book to delete </h1>

	<form method="post" action="deleteBook.php">

		<label for="bTitle"> Book Title:</label>
		<select name="bTitle">

		<?php
		$conn = mysqli_connect("tund.cefns.nau.edu", "cs212_se558", "5189343", "cs212_se558");
		$sql = "SELECT BookTitle, BookFirstAuthor, BookYear FROM cs212_se558.book;";
		$result =  mysqli_query($conn, $sql);

		while ($row =  mysqli_fetch_assoc($result)) {
			echo '<option value="'.$row["BookTitle"].'">'.$row["BookFirstAuthor"].'</option>';
		}
		mysqli_close($conn);
		?>

		</select>

		<br><br>
		
		<input type="submit" name="Submit">

	</form>

	<br><br><br>

	<a href="index.html">Index</a>

</html>
