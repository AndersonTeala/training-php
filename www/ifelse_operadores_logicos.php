<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css">
		<title>Anderson Teala</title>
	</head>
	<body>

			<?php
          //operadores condiconais/comparação
					/* Igual (==)
					Idêntico (===)
					Diferente (!=)
					Diferente (<>)
					Não idêntico (!==)
					Menor (<)
					Maior (>)
					Menor igual (≤)
					Maior igual (≥) */

					//operadores lógicos
					//Operador E (AND ou &&) - Verdadeiro se todas as expressões forem verdadeiras
					//Operador OU (OR ou ||) - Verdadeiro se pelo menos uma das expressões for verdadeira
					//Operador Xor (XOR) - Verdadeiro apenas se uma das expressões for verdadeira, mas não ambas
					//Operador Negação (!) - Inverte o resultado da expressão

					//() estabelecer precedência

			if((4 == 3 && 10 > 35) && 66 || 78) {
					echo 'Verdadeiro';
			} else {
					echo 'Falso';
			}

		?>

	</body>
</html>