<!-- Steven Enriquez - Colors - Project 3 - saveColor.php -->

<!DOCTYPE html>

<?php 
$name = "ParBackColor";
$selected_color = $_POST["color"];
setcookie($name, $selected_color, time() + (86400 * 7), "/" );
?>

<html>
	
	<head>
		
		<title> Project 3: saveColor </title>
	
		<meta charset="UTF-8">

		<style>

			a {
    			background: black;
   				color: white;
    			display: inline-block;
    			padding: 10px;
    			text-decoration: none;
    			border-radius: 5px;
			}

			#link {
				text-align: center;
			}

		</style>
	
	</head>
	
	<body>

		<br><br>
		<div id="link">
			<a href="https://cefns.nau.edu/~se558/proj3/testColor.php"> Test Color Change </a>
		</div>
	</body>

</html>