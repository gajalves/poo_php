<?php
    
    class Homem extends Mamifero {
        
    }

    class Macaco extends Mamifero{

        function locomoverSe() {
            echo 'de galho em galho';
        }
    }

    class Mamifero {

        function locomoverSe () {
            echo 'Andando';
        }
    }

    $homem = new Homem();
    $homem->locomoverSe();
    echo '<br>';
    $macaco = new Macaco();
    $macaco->locomoverSe();    
?>