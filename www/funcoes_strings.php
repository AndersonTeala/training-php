<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css">
		<title>Anderson Teala</title>
	</head>
	<body>

			<?php
          
          $texto = 'Cursando PHP';

          //string to lower
          echo $texto . '<br/>';
          echo strtolower($texto);
          echo '<hr/>';
          //string to upper
          echo $texto . '<br/>';
          echo strtoupper($texto);
          echo '<hr/>';
          //upper case firt
          echo $texto . '<br/>';
          echo ucfirst($texto);
          echo '<hr/>';
          //string lenght
          echo $texto . '<br/>';
          echo strlen($texto);
          echo '<hr/>';
          //string replace
          echo $texto . '<br/>';
          echo str_replace('PHP', 'NodeJS', $texto);
          echo '<hr/>';
          //string substr
          echo $texto . '<br/>';
          echo substr($texto, 8, 4) . '...';

		?>

	</body>
</html>