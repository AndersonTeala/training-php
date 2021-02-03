<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Anderson Teala</title>
	</head>

	<body>

			<?php

					$aluno = Anderson;
					$comportamento = true;
					$notas = 10;

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

			<h1>Informações sobre aluno</h1>
			<p>Aluno: <?= $aluno ?></p>
			<p>Nota: <?= $notas ?></p>
			<p>Mensalidade: <?= $mensalidade?></p>
			<p>Recebeu desconto:
				<?php
						if($recebeu_desconto == true) {
							echo 'SIM';
						} else {
							echo 'NÃO';
						}
				?>
			</p>

	</body>
</html>