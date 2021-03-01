<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="styles.css">
		<title>Anderson Teala</title>
	</head>

	<body>

			<?php

					$aluno = 'Anderson';
					$comportamento = true;
					$notas = 7;

					$mensalidade = 500;
					$recebeu_desconto = true;

					if($notas >= 9 && $comportamento == true){
						$mensalidade = 300;
					} else if ($notas == 8 && $comportamento == true){
						$mensalidade = 400;
					} else {
						$recebeu_desconto = false;
					}

			?>

			<h1>Informações sobre o aluno</h1>
			<p>Aluno: <?= $aluno ?></p>
			<p>Nota: <?= $notas ?></p>
			<p>Mensalidade: <?= $mensalidade?></p>
			<!-- //operador ternário -->
			<p>Recebeu desconto: <?= $recebeu_desconto ? 'SIM' : 'NÃO'; ?> 
				<?php
						/* if($recebeu_desconto == true) {
							echo 'SIM';
						} else {
							echo 'NÃO';
						} */
				?>
			</p>

	</body>
</html>