<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css">
		<title>Anderson Teala</title>
	</head>
	<body>
		<?php
			
			//string
			$nome = 'Anderson Teala das Neves';

			//int
			$idade = 25;

			//float
			$peso = 82.5;

			//boolean
			$fumante_sn = true;

		?>

		<h1>Ficha cadastral</h1>
		<br/>
		<p>Nome: <?= $nome ?></p>
		<p>Idade: <?= $idade ?></p>
		<p>Peso: <?= $peso ?></p>
		<p>Fumante: <?= $fumante_sn ?></p>

	</body>
</html>