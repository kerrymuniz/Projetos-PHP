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
    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1122', 'Preta');


    echo '<pre>';
    print_r($carro);
    echo '<br>';
    print_r($moto);
    echo '<pre>';
    echo '<hr>';

    $carro->abrirTetoSolar();
    echo '<br>';
    $carro->alterarPosicaoVolante();
    echo '<br>';
    $carro->acelerar();
    echo '<br>';
    $carro->freiar();
    echo '<br><br>';

    $moto->empinar();
    echo '<br>';
    $moto->acelerar();
    echo '<br>';
    $moto->freiar();

?>