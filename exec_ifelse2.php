<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="styles.css">
		<title>Anderson Teala</title>
	</head>

	<body>

			<?php
						$name = Anderson;
						$idade = 25;
						$peso = 50;
			?>

			<h1>Informações sobre o doador</h1>
			<p>Nome: <?= $name?></p>
			<p>Idade: <?= $idade?></p>
			<p>Peso: <?= $peso?>kg</p>

			<p>Info: 
				<?php
						if(($idade >= 16 && $idade <= 69) && $peso >= 50){
							echo 'Atende ao requisitos';
						} else {
							echo 'Não atende aos requisitos';
						}
				?>
			</p>

	</body>
</html>