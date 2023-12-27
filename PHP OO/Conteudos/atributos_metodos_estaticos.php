<?php

    class Exemplo {
        public static $atributo1 = 'Eu sou um atributo estático';
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1()
        {
            echo 'eu sou um método estático';
        }

        public function metodo2()
        {
            echo 'eu sou um método normal';
        }
    }

    $ex = new Exemplo();
    echo Exemplo::$atributo1;
    echo '<br>';
    Exemplo::metodo1();
    echo '<br>';
    $ex->metodo2();
    echo '<br>';
    echo $ex->atributo2;

?>