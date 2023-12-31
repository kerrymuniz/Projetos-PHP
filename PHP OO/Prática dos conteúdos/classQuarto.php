<?php

    namespace PraticarConteudoClassQuarto;

    require 'classFuncoesQuarto.php';
    //use PraticarConteudoClassFuncoesQuarto\FuncoesQuarto;

    interface FuncoesQuartoInterface {
        public function abrirFecharPorta($abrirFecharPorta);
        public function limparQuarto($estadoLimpeza);
        public static function forrarCama($estadoCama);
    }

    class Quarto implements FuncoesQuartoInterface{
        public $bancada;
        public $janela;
        private $cama;
        protected $guardaRoupa;
        public $estadoPorta;
        public $estadoLimpeza;

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

        public function abrirFecharPorta($estadoPorta)
        {
            return $this->estadoPorta = $estadoPorta;
        }

        public function limparQuarto($estadoLimpeza)
        {
            return $this->estadoLimpeza = $estadoLimpeza;
        }

        public static function forrarCama($estadoCama)
        {
            return $estadoCama;
        }

        public function abrirJanela()
        {
            echo 'abrir janela e depois fechá-la';
        }

    }

    $quarto = new \PraticarConteudoClassQuarto\Quarto('bancada', 'janela', 'cama', 'guarda roupa');
    $funcoesQuarto = new \PraticarConteudoClassFuncoesQuarto\FuncoesQuarto();
    echo $quarto->__get('bancada') . ' -> Objeto do quarto.';
    echo '<br>';
    echo $funcoesQuarto->deitar() . ' -> Ação a se fazer no quarto.';
    echo '<br>';
    echo $funcoesQuarto->abrirJanela() . ' -> Ação a se fazer no quarto.';
    echo '<br>';
    echo $quarto->abrirJanela() . ' -> Ação a se fazer no quarto.';
    echo '<br>';
    echo $funcoesQuarto->organizarGuardaRoupa() . ' -> Ação a se fazer no quarto.';
    echo '<br>';
    echo $quarto->__set('guardaRoupa', 'Tirar roupas do guarda-roupa');
    echo $quarto->__get('guardaRoupa') . ' -> Fazendo uma acção com o objeto do quarto.';
    echo '<br>';
    echo $funcoesQuarto->organizarBancada() . ' -> Ação a se fazer no quarto.';
    
    //chamando funções das interfaces
    echo '<br>';
    echo 'Estado da Porta do quarto: ' . '<strong>'.$quarto->abrirFecharPorta('Aberta').'</strong>';
    echo '<br>';
    echo 'Estado do quarto: ' . '<strong>'.$quarto->limparQuarto('Limpo').'</strong>';
    echo '<br>';
    echo 'Estado da cama: ' . '<strong>'.Quarto::forrarCama('Cama forrada').'</strong>';

    echo '<br><br>';
    unset($quarto);

?>