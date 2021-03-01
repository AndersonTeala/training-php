<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css">
		<title>Anderson Teala</title>
	</head>
	<body>

		<?php

				//false (true/false) - tipo variável boolen
				//null e empty - valores especiais

				$funcionario1 = null;
				$funcionario2 = '';
				$funcionario3 = false;

				//valores_null
				echo '<h1>Valores null<h1/>';
				if(is_null($funcionario1)) {
					echo 'Sim, a variável é null';
				} else {
					echo 'Não, a variável não é null';
				}

				echo '<br/>';
				if(is_null($funcionario2)) {
					echo 'Sim, a variável é null';
				} else {
					echo 'Não, a variável não é null';
				}

				echo '<br/>';
				if(is_null($funcionario3)) {
					echo 'Sim, a variável é null';
				} else {
					echo 'Não, a variável não é null';
				}
				echo '<hr>';

				//valores vazios?
				echo '<h1>Valores Vazios?<h1/>';
				if(empty($funcionario1)) {
					echo 'Sim, a variável está vazia';
				} else {
					echo 'Não, a variável está vazia';
				}

				echo '<br/>';
				if(empty($funcionario2)) {
					echo 'Sim, a variável está vazia';
				} else {
					echo 'Não, a variável não está vazia';
				}

				echo '<br/>';
				if(empty($funcionario3)) {
					echo 'Sim, a variável está vazia';
				} else {
					echo 'Não, a variável não está vazia';
				}

		?>

	</body>
</html>