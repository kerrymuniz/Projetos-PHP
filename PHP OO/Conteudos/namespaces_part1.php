<?php

namespace A;

    class Cliente implements CadastroInterface {
        public $nome = 'Jorge';

        public function __construct()
        {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '<pre>';
        }

        public function __get($attr)
        {
            return $this->$attr;
        }

        public function salvar()
        {
            echo 'salvar';
        }
    }

    interface CadastroInterface {
        public function salvar();
    }




    namespace B;

    class Cliente implements CadastroInterface {
        public $nome = 'Jamilton';

        public function __construct()
        {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '<pre>';
        }

        public function __get($attr)
        {
            return $this->$attr;
        }

        public function remover()
        {
            echo 'remover';
        }
    }

    interface CadastroInterface {
        public function remover();
    }

    $c = new \B\Cliente();
    print_r($c);
    echo $c->__get('nome');

?>