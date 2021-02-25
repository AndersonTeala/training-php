<?php
	//IMPORTANTO ARQUIVOS
	require "./bibliotecas/lib1/lib1.php";
	require "./bibliotecas/lib2/lib2.php";
	// IMPORTANDO AS CLASSES E NOMEANDO ELAS
	use A\Cliente as C1;
	use B\Cliente as C2;
	//VISUALIZANDO AS CLASSES IMPORTADAS RENOMEADAS
	$c = new C1();
	print_r($c);
	echo $c->__get('nome');
	echo'<br/>';
	$c = new C2();
	print_r($c);
	echo $c->__get('nome');


?>

<!-- ESTILO DA PÁGINA -->
<link rel="stylesheet" href="../styles.css">