<?php

    class Pessoa {
        public $nome = null;

        //é executado quando o obj é instanciado
        function __construct($nome)
        {
            //echo 'obj iniciado';
            $this->nome = $nome;
        }

        function __destruct()
        {
            echo 'Objeto removido';
        }

        function __get($atributo)
        {
            return $this->$atributo;
        }

        function trabalhar()
        {
            return $this->__get('nome') . " está trabalhando.";
        }
    }

    $pessoa = new Pessoa('Kerry');
    echo "Nome: " . $pessoa->__get('nome');
    echo "<br>";
    echo $pessoa->trabalhar();

    echo '<br>';
    unset($pessoa); //executa o método destruct
    
?>