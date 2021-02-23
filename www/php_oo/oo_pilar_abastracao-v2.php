<link rel="stylesheet" href="../styles.css">

<?php

    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //getters setters
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setnumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function getNome() {
            return $this->nome;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }

        function getTelefone() {
            return $this->telefone;
        }

        //métodos
        function resumirCadFunc() {
        	return "$this->nome possui $this->numFilhos filhos(s) seu telefone é $this->telefone";
        }

        function modificarNumFilhos($numFilhos) {
        	$this->numFilhos = $numFilhos;
        }

        function modificarTelefone($telefone) {
            $this->telefone = $telefone;
        }

    }

    $y = new Funcionario();
    $y->setNome('Anderson');
    $y->setNumFilhos(1);
    $y->setTelefone('12999999999');
    //echo $y->resumirCadFunc();
    echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filhos(s), e seu telefone é ' . $y->getTelefone() . '.';

    echo '<br/>';
    $x = new Funcionario();
    $x->setnome('Thais');
    $x->setNumFilhos(2);
    $x->setTelefone('11999999999');

    echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filhos(s), e seu telefone é ' . $x->getTelefone() . '.';


    
?>