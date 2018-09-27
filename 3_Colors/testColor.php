<!-- Steven Enriquez - Colors - Project 3 - testColor.php -->

<!DOCTYPE html>

<html>

	<head>

		<title> Project 3: testColor </title>
	
		<meta charset="UTF-8">

		<style>

			p { 
				<?php
					echo "background-color: " . $_COOKIE["ParBackColor"] . ";";
				?>
			 }

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
        	<a href="https://cefns.nau.edu/~se558/proj3/selectColor.html"> Change Paragraph Color </a>
        </div>

        <br><br>

      	<?php
			echo "Paragraph background color is set to: " . $_COOKIE["ParBackColor"] . "<br />";
        ?>

        <br><br>

		<div id="paragraphs">

			<p> 
				The potato is a starchy, tuberous crop from the perennial nightshade Solanum tuberosum. Potato may be applied to both the plant and the edible tuber. Potatoes have become a staple food in many parts of the world and an integral part of much of the world's food supply. Potatoes are the world's fourth-largest food crop, following maize (corn), wheat, and rice. Tubers produce Glycoalkaloid in small amounts. If green sections (sprouts and skins) of the plant are exposed to light the tuber can produce a high enough concentration of glycoalkaloids to affect human health. 
			</p>
			<p> 
				In the Andes, where the species is indigenous, some other closely related species are cultivated. Potatoes were introduced to Europe in the second half of the 16th century by the Spanish. Wild potato species can be found throughout the Americas from the United States to southern Chile. The potato was originally believed to have been domesticated independently in multiple locations, but later genetic testing of the wide variety of cultivars and wild species proved a single origin for potatoes in the area of present-day southern Peru and extreme northwestern Bolivia (from a species in the Solanum brevicaule complex), where they were domesticated approximately 7,000–10,000 years ago. Following millennia of selective breeding, there are now over a thousand different types of potatoes. Over 99% of the presently cultivated potatoes worldwide descended from varieties that originated in the lowlands of south-central Chile, which have displaced formerly popular varieties from the Andes. 
			</p>
			<p>
				However, the local importance of the potato is variable and changing rapidly. It remains an essential crop in Europe (especially eastern and central Europe), where per capita production is still the highest in the world, but the most rapid expansion over the past few decades has occurred in southern and eastern Asia. As of 2014, China led the world in potato production, and, together with India, produced 37% of the world's potatoes.
			</p>

		</div>

	</body>

</html>