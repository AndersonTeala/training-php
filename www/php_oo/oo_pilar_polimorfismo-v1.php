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

		function trocarMarcha() {
			echo 'Desengatar embreagem com a mão e engatar a marcha com o pé';
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

		function trocarMarcha() {
			echo 'Desengatar embreagem com o pé e engatar a macha com a mão';
		}
	}

	$carro = new Carro('ABC1623', 'Branco');
	$moto = new Moto('HJN8766', 'Preto');

	$carro->trocarMarcha();
	echo '<br/>';
	$moto->trocarMarcha();