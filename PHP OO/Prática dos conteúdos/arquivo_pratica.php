<?php

    namespace PraticarConteudo;

    class Quarto {
        public $bancada;
        public $janela;
        private $cama;
        protected $guardaRoupa;

        function __construct($attr)
        {
            $this->$attr = $attr;
        }

        //métodos mágicos
        function __set($attr, $value)
        {
            $this->$attr = $value;
        }
        function __get($attr)
        {
            return $this->$attr;
        }
    }

    $quarto = new \PraticarConteudo\Quarto;

?>