<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Spectacle en folie</title>
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>

  <body>
	<header>
	<?php
		include'header.php';
	?>		
	</header>

    <h1>Programme</h1>
    	
    	<table>
    		<tr>

    			<td>heure</td>
    			<td>titre_spectacle</td>
    			<td>artiste</td>
    			<td>image_url</td>

    		</tr>

		    <?php

		    	  include 'tableau.php';
					foreach ($spectacles as $spectacle){
						echo "<tr>";
					foreach ($spectacle as $key => $valeur) {
						echo "<td>".$valeur."</td>";	
						}
					}
		    ?>

    	</table>
    		</br>
	<footer>
	<?php
		include'footer.php';
	?>	
	</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>