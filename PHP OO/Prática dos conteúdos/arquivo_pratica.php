<?php

    namespace PraticarConteudo;

    class Quarto {
        public $estadoQuarto;
        public $bancada;
        public $janela;
        private $cama;
        protected $guardaRoupa;

        function __construct($estadoQuarto)
        {
            $this->estadoQuarto = $estadoQuarto;
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