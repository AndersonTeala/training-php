<link rel="stylesheet" href="../styles.css">

<?php

		class Pai {
				private $nome = 'Anderson';
				protected $sobrenome = 'teala';
				public $humor = 'Feliz';

				public function getNome() {
					return $this->nome;
				}

				public function setNome($value) {
					if(strlen($value) >= 9 ) {
						$this->nome = $value;
					}
				}
		}	

		$pai = new Pai();
		echo $pai->getNome();
		$pai->setNome('Teala Anderson');
		echo '<br/>';
		echo $pai->getNome();