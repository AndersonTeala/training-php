<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
    <link rel="stylesheet" href="styles.css">
		<title>Anderson Teala</title>
	</head>

	<body style="font-size: 22px; padding: 42px; text-align: center;">
				<hr/>
				<h3>Pós-Incremento</h3>
				<?php
						$a = 7;

						echo "O valor contido em a é $a <br/>";
						echo 'O valor contido em a após o incremento é ' . $a++ . ' <br/>';
						echo "O valor atualizado de a é $a";
				?>

				<hr/>
				<h3>Pré-Incremento</h3>
				<?php
						$a = 7;

						echo "O valor contido em a é $a <br/>";
						echo 'O valor contido em a pré incremento é ' . ++$a . ' <br/>';
						echo "O valor atualizado de a é $a";
				?>
				<hr/>
				<h3>Pós-Decremento</h3>
				<?php
						$a = 7;

						echo "O valor contido em a é $a <br/>";
						echo 'O valor contido em a após o decremento é ' . $a-- . ' <br/>';
						echo "O valor atualizado de a é $a";
				?>
				<hr/>
				<h3>Pré-Decremento</h3>
				<?php
						$a = 7;

						echo "O valor contido em a é $a <br/>";
						echo 'O valor contido em a pré decremento é ' . --$a . ' <br/>';
						echo "O valor atualizado de a é $a";
				?>

	</body>
</html>