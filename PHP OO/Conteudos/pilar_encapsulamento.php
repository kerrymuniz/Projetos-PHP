<?php 
    require_once "pilar_encapsulamento_Filho.php";

    class Pai {
        private $nome = 'Kerry';
        protected $sobrenome = 'Muniz';
        public $humor = 'Feliz';

        //métodos get e set
        /*public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }*/

        private function executarMania()
        {
            echo 'Assobiar';
        }

        protected function responder()
        {
            echo 'Oi';
        }

        public function executarAcao()
        {
            $this->executarMania();
            echo '<br>';
            $this->responder();
        }

    }

    // $pai = new Pai();
    // //echo $pai->humor;
    // echo $pai->__get('nome');
    // $pai->__set('nome', 'Kerry Muniz Santos');
    // echo '<br>';
    // echo $pai->__get('nome');
    // echo '<br>';
    // $pai->executarAcao();

    $filho = new Filho();
    echo '<pre>';
    print_r($filho);
    echo '<pre>';
    //echo $filho->getAtributo('nome');
    echo '<br>';
    $filho->setAtributo('nome', 'Junior');
    echo $filho->getAtributo('nome');

?>