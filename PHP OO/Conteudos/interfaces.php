<?php
    //métodos da interface devem ser obrigatoriamente públicos
    interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar();
    }

    //------------------------------

    class Geladeira implements EquipamentoEletronicoInterface {
        public function abrirPorta()
        {
            echo 'abrir porta';
        }

        public function ligar()
        {
            echo 'ligar';
        }

        public function desligar()
        {
            echo 'desligar';
        }
    }

    class TV implements EquipamentoEletronicoInterface {
        public function trocarCanal()
        {
            echo 'trocar canal';
        }

        public function ligar()
        {
            echo 'ligar';
        }

        public function desligar()
        {
            echo 'desligar';
        }
    }

    $geladeira = new Geladeira();
    $tv = new TV();

?>