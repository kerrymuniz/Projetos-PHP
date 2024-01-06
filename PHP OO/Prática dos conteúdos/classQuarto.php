<?php

    namespace PraticarConteudoClassQuarto;

    require 'classFuncoesQuarto.php';
    //use PraticarConteudoClassFuncoesQuarto\FuncoesQuarto;

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

    $quarto = new \PraticarConteudoClassQuarto\Quarto('bancada', 'janela', 'cama', 'guarda roupa');
    echo $quarto->__get('bancada') . ' -> Objeto do quarto.';
    $funcoesQuarto = new \PraticarConteudoClassFuncoesQuarto\FuncoesQuarto();
    echo '<br>';
    $funcoesQuarto->deitar() . ' -> Ação a se fazer no quarto.';
    echo '<br>';
    $funcoesQuarto->abrirJanela() . ' -> Ação a se fazer no quarto.';
    echo '<br>';
    $funcoesQuarto->organizarGuardaRoupa() . ' -> Ação a se fazer no quarto.';
    echo '<br>';
    $quarto->__set('guardaRoupa', 'Tirar roupas do guarda-roupa');
    $quarto->__get('guardaRoupa');
    echo '<br>';
    $funcoesQuarto->organizarBancada();

?>