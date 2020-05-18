<?php

    class Funcionario {       
        //ATRIBUTOS
        public $nome = 'Jose';
        public $telefone = '000000000';
        public $numFilhos = 2;

        //METODOS
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filhos";
        }

        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
    }

    $func = new Funcionario();
    echo $func->resumirCadFunc();
    echo '<br>';
    $func->modificarNumFilhos(3);
    echo $func->resumirCadFunc();

?>