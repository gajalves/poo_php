<?php

    class Funcionario {       
        //ATRIBUTOS
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //GETTERS E SETTERS (overloading)     function __set($atributo, $valor)
        function __set($a, $v) {
            $this->$a = $v;
        }

        function __get($a) {
            return $this->$a;
        }

        //METODOS
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filhos";
        }

        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
    }

    $func = new Funcionario();
    $func->__set('nome', 'José');
    $func->__set('numFilhos', 2);

    //echo $func->resumirCadFunc();
    echo $func->__get('nome');
    echo $func->__get('numFilhos');

?>