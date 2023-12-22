<?php 
    require_once "pilar_encapsulamento.php";

    class Filho extends Pai {
        public function getAtributo($attr)
        {
            return $this->$attr;
        }

        public function setAtributo($attr, $value)
        {
            $this->$attr = $value;
        }
    }

?>