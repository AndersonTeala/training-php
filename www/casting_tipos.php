<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
    <link rel="stylesheet" href="styles.css">
		<title>Anderson Teala</title>
	</head>

	<body style="font-size: 45px; padding: 42px; text-align: center;">
		
			<?php

					$valor = 10.35;
					$valor2 = (int) $valor;

					echo $valor. ' ' . gettype($valor);
					echo '<br/>';
					echo $valor2. ' ' . gettype($valor2);
			?>

	</body>
</html>