<link rel="stylesheet" href="../styles.css">

<?php

		class Exemplo {
			public static $atributo1 = 'Anderson Teala com atributo estático';
			public $atributo2 = 'Um atributo normal';

			public static function metodo1() {
				echo 'Método estático';
			}

			public function metodo2() {
				echo 'Método normal';
			}
		}
		//SINTAXE DE RESOLUÇÃO DE ESCOPO
		echo Exemplo::$atributo1;
		echo '<br/>';
		Exemplo::metodo2();