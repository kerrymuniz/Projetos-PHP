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

        function __destruct()
        {
            echo 'Encerrando objeto criado.';
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
    echo $funcoesQuarto->deitar() . ' -> Ação a se fazer no quarto.';
    echo '<br>';
    echo $funcoesQuarto->abrirJanela() . ' -> Ação a se fazer no quarto.';
    echo '<br>';
    echo $funcoesQuarto->organizarGuardaRoupa() . ' -> Ação a se fazer no quarto.';
    echo '<br>';
    echo $quarto->__set('guardaRoupa', 'Tirar roupas do guarda-roupa');
    echo $quarto->__get('guardaRoupa') . ' -> Fazendo uma acção com o objeto do quarto.';
    echo '<br>';
    echo $funcoesQuarto->organizarBancada() . ' -> Ação a se fazer no quarto.';

    echo '<br><br>';
    unset($quarto, $funcoesQuarto);

?>