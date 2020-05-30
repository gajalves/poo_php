<?php
    
    class Exemplo {
        
        public static $attr1 = 'Atributo estático';
        public $attr2 = 'Atributo normal';

        public static function metd1() {
            echo 'Eu sou um método estático';
        }

        public function metd2() {
            echo 'Eu sou um método normal';
        }
    }

    //$x = new Exemplo();
    /*
    echo Exemplo::$attr1;
    echo'<br>';
    echo Exemplo::metd1();
    */

    echo Exemplo::metd2();

?>
