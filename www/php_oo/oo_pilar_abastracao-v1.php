<link rel="stylesheet" href="../styles.css">

<?php

    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;



        //métodos
        function resumirCadFunc() {
        	return "$this->nome possui $this->numFilhos filhos(s)";
        }

        function modificarNumFilhos($numFilhos) {
        	$this->numFilhos = $numFilhos;
        }

    }

    $y = new Funcionario();
    echo $y->resumirCadFunc();
    echo '<br/>';
    $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc();
    echo '<br/>';

    $x= new Funcionario();
    echo $x->resumirCadFunc();
    echo '<br/>';
    $x->modificarNumFilhos(5);
    echo $x->resumirCadFunc();
    
?>