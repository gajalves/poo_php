<?php

    class Carro extends Veiculo {
        public $teto_solar = true;

        function __construct($placa, $cor) {
           $this->placa = $placa; 
           $this->cor = $cor;
        }
    
        function abrirTetoSolar() {
            echo 'abrir teto solar';
        }
    
        function alterPosicaoVolante() {
            echo 'posição volante';
        }
    }
    
    
    class Moto extends Veiculo {
        publiC $guidao = true;

        function __construct($placa, $cor) {
            $this->placa = $placa; 
            $this->cor = $cor;
        }

        function chamarNoGrau() {
            echo 'chama no grau';
        }
    }


    class Veiculo {
        public $placa = null;
        public $cor = null;        
        
        function acelerar() {
            echo 'cantando pneu';
        }

        function freiar() {
            echo 'freiando...' ;
        }
    }

    $carro = new Carro('ABC1234', 'Azul');
    $moto = new Moto('DEF4321', 'Vermelha');

    echo '<pre>';
    print_r($carro);    
    print_r($moto);

    $carro->acelerar();
    echo '<br>';
    $carro->freiar();
    echo '<br>';
    $moto->chamarNoGrau();

?>
