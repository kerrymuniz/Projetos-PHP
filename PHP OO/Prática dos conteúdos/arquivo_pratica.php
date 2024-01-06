<?php

    namespace PraticarConteudo;

    class Quarto {
        public $estadoQuarto = null;
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

    $quarto = new Quarto;

?>