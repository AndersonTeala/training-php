<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css">
		<title>Anderson Teala</title>
	</head>
	<body>

			<h1>Array pesquisa</h1>

		<?php

				//in_array() -> retorna true ou false para a existencia do que está sendo procurado
				//array_search() -> retorna o indice do valor pesquisado caso o valor existe

				$lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];

				echo '<pre>';
				print_r($lista_frutas);
				echo '<pre/>';

				//$existe = in_array('Banana', $lista_frutas);
				$existe = array_search('Maça', $lista_frutas);

				if ($existe != null) {
					echo 'Sim, o valor pesquisado existe no array';
				} else {
					echo 'Não, o valor pesquisado não existe no array';
				}

		?>

	</body>
</html>