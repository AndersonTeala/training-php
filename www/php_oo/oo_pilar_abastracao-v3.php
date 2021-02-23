<link rel="stylesheet" href="../styles.css">

<?php

    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;

        //getters setters (overloading / sobrecarregar)
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

    }

    $y = new Funcionario();
    $y->__set('nome', 'Anderson');
    $y->__set('numFilhos', '1');
    $y->__set('telefone', '119494847232');
    $y->__set('cargo', 'Programador Junior');
    echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filhos(s), e seu telefone ' . $y->__get('telefone') . ', e o seu cargo na empresa é ' . $y->__get('cargo');

    echo '<br/>';
    $x = new Funcionario();
    $x->__set('nome','Thais');
    $x->__set('numFilhos', '2');
    $x->__set('telefone', '119494826372');
    $x->__set('cargo', 'Adm junior');

    echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filhos(s), e seu telefone ' . $x->__get('telefone') . ', e o seu cargo na empresa é ' . $y->__get('cargo');


    
?>