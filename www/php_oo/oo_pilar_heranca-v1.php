<link rel="stylesheet" href="../styles.css">

<?php


	class Carro extends Veiculo {
		public $teto_Solar = true;

		function __construct($placa, $cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function abrirTetoSolar() {
			echo 'Abrir teto solar';
		}

		function alterarPosicaoVolante() {
			echo 'Alterar poisão do volante';
		}
	}


	class Moto  extends Veiculo {
		public $contraPesoGuidao = true;

		function __construct($placa, $cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function empinar() {
			echo 'Empinar';
		}
	}

	class Veiculo {
		public $placa = null;
		public $cor = null;

		function acelerar() {
			echo 'Acelerar';
		}

		function freiar() {
			echo 'Freiar';
		}

		function abastecer() {
			echo 'Abastecer';
		}
	}

	$carro = new Carro('ABC1623', 'Branco');
	$moto = new Moto('HJN8766', 'Preto');

	echo '<pre>';
	print_r($carro);
	echo '<br/><br/>';
	print_r($moto);
	echo '</pre>';
	echo '<hr/>';

	$carro->abrirTetoSolar();
	echo '<br/>';
	$carro->alterarPosicaoVolante();
	echo '<br/>';
	$carro->freiar();
	echo '<br/>';
	$carro->abastecer();

	echo '<hr/>';

	$moto->empinar();
	echo '<br/>';
	$moto->acelerar();
	echo '<br/>';
	$moto->freiar();
	echo '<br/>';
	$moto->abastecer();
