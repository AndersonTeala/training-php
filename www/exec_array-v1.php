<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css">
		<title>João Teala</title>
	</head>
	<body>

			<h1> Array multimendicional - exec </h1>

		<?php

				$lista_familia = [];

				$lista_familia['soares_neves'] = ['1' => 'João', '2' => 'karina', '3' => 'Julie'];
				$lista_familia['pestano'] = ['1' => 'Julie', '2' => 'Carlos', '3' => 'Frederico', '4' => 'Jasmin', '5' => 'karina'];
				$lista_familia['mendonca'] = ['1' => 'Marcos', '2' => 'Sabrina', '3' => 'Pedro', '4' => 'Marco', '5' => 'João', '6' => 'karina', '7' => 'Henrique'];
				$lista_familia['crosse'] = ['1' => 'Sara', '2' => 'Carlos', '3' => 'Julie', '4' => 'Bruno', '5' => 'Miller', '6' => 'João', '7' => 'karina'];

				echo '<pre>';
				print_r($lista_familia);
				echo '<pre/>';

				echo '<hr>';
				echo '<h1>Familia Soares e Neves<h1/>';
				echo $lista_familia['soares_neves'][1];
				echo '<br/>';
				echo $lista_familia['soares_neves'][2];
				echo '<br/>';
				echo $lista_familia['soares_neves'][3];
				echo '<hr>';

				echo '<h1>Familia pestano<h1/>';
				echo $lista_familia['pestano'][1];
				echo '<br/>';
				echo $lista_familia['pestano'][2];
				echo '<br/>';
				echo $lista_familia['pestano'][3];
				echo '<br/>';
				echo $lista_familia['pestano'][4];
				echo '<br/>';
				echo $lista_familia['pestano'][5];
				echo '<hr>';

				echo '<h1>Familia mendonca<h1/>';
				echo $lista_familia['mendonca'][1];
				echo '<br/>';
				echo $lista_familia['mendonca'][2];
				echo '<br/>';
				echo $lista_familia['mendonca'][3];
				echo '<br/>';
				echo $lista_familia['mendonca'][4];
				echo '<br/>';
				echo $lista_familia['mendonca'][5];
				echo '<br/>';
				echo $lista_familia['mendonca'][6];
				echo '<br/>';
				echo $lista_familia['mendonca'][7];
				echo '<hr>';

				echo '<h1>Familia crosse<h1/>';
				echo $lista_familia['crosse'][1];
				echo '<br/>';
				echo $lista_familia['crosse'][2];
				echo '<br/>';
				echo $lista_familia['crosse'][3];
				echo '<br/>';
				echo $lista_familia['crosse'][4];
				echo '<br/>';
				echo $lista_familia['crosse'][5];
				echo '<br/>';
				echo $lista_familia['crosse'][6];
				echo '<br/>';
				echo $lista_familia['crosse'][7];
				echo '<hr>';
				
		?>

	</body>
</html>