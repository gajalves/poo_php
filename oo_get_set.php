<?php

    class Funcionario {       
        //ATRIBUTOS
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //GETTERS E SETTERS
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function getNome() {
            return $this->nome;
        }

        function getNumFilhos() {
            return $this->numFilhos;
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
    $func->setNome('José');
    $func->setNumFilhos(2);

    //echo $func->resumirCadFunc();
    echo $func->getNome();
    echo $func->getNumFilhos();

?>