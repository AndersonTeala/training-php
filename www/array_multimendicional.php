<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css">
		<title>Anderson Teala</title>
	</head>
	<body>

			<h1>Array multimendicional</h1>

		<?php

				//$listas_coisas = array();
				$listas_coisas = [];

				$listas_coisas['frutas'] = array('1' => 'Banana', '2' => 'Maça', '3' => 'Morango', '4' => 'Uva');
				$listas_coisas['pessoas'] = ['1' => 'João', '2' => 'José', '3' => 'Maria'];

				echo '<pre>';
				print_r($listas_coisas);
				echo '<pre/>';

				echo'<hr/>';
				echo $listas_coisas['frutas'][3];
				echo'<hr/>';
				echo $listas_coisas['pessoas'][2];
		?>

	</body>
</html>