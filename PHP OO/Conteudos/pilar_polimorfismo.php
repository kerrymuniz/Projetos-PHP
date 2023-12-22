<?php
    require_once "pilar_heranca_Veiculo.php"; //incluindo o arquivo que contém a classe Veiculo

    class Carro extends Veiculo {
        public $tetoSolar = true;

        //construtor
        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        //métodos
        function abrirTetoSolar()
        {
            echo 'Carro : abrir teto solar';
        }

        function alterarPosicaoVolante()
        {
            echo 'Carro : alterar posição volante';
        }
    }

    class Moto extends Veiculo {
        public $contraPesoGuidao = true;

        //construtor
        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        //métodos
        function empinar()
        {
            echo 'Moto : empinar';
        }

        //polimorfismo - mesmo método mas comportamento diferente
        function trocarMarcha()
        {
            echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
        }
    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1122', 'Preta');

    $carro->trocarMarcha();
    echo '<br>';
    $moto->trocarMarcha();

?>