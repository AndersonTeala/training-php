<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css">
		<title>Anderson Teala</title>
	</head>
	<body>

			<h1>sequenciais (numéricos)</h1>

		<?php

				//sequenciais (numéricos)
				$listas_frutas = array('Banana', 'Maça', 'Morango', 'Uva');

				$listas_frutas[] = 'Abacaxi';

				echo '<pre>';
				var_dump($listas_frutas);
				echo '<pre/>';
				echo '<hr/>';
				echo '<pre>';
				print_r($listas_frutas);
				echo '<pre/>';
				echo '<hr/>';
				echo $listas_frutas[2];

		?>

		<h1>associativos</h1>

		<?php
				//sequenciais (numéricos)
				$listas_frutas = array(
					'a' => 'Banana',
					'b' =>'Maça',
					'x' =>'Morango',
					'2' =>'Uva');
					
					echo '<pre>';
					print_r($listas_frutas);
					echo '<pre/>';

		?>

	</body>
</html>