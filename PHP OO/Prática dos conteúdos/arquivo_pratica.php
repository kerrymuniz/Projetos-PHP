<?php

    namespace PraticarConteudo;

    class Quarto {
        public $bancada;
        public $janela;
        private $cama;
        protected $guardaRoupa;

        function __construct($bancada, $janela, $cama, $guardaRoupa)
        {
            $this->bancada = $bancada;
            $this->janela = $janela;
            $this->cama = $cama;
            $this->guardaRoupa = $guardaRoupa;
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

    $quarto = new \PraticarConteudo\Quarto();

?>