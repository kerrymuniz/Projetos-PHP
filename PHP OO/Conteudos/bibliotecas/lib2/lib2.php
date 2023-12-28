<?php

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

?>