<?php
    
    //Pilar da Abstração - abstrair informações do objeto do mundo real

    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters e setters mágicos
        function __get($atributo)
        {
            return $this->$atributo;
        } 

        function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

        //getters e setters
        /*
        function getNome()
        {
            return $this->nome;
        }

        function setNome($nome)
        {
            $this->nome = $nome;
        }

        function getNumFilhos()
        {
            return $this->numFilhos;
        }

        function setNumFilhos($numFilhos)
        {
            $this->numFilhos = $numFilhos;
        }
        */

        //métodos
        function resumirCadFunc()
        {
            return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s).<br>Cargo: " . $this->__get('cargo') . "<br>Salário: R$" . $this->__get('salario');
        }

        function modificarNumFilhos($numFilhos)
        {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }

    }

    $obj = new Funcionario();
    $obj-> __set('nome', 'Kerry');
    $obj->__set('numFilhos', 3);
    $obj->__set('cargo', 'Gestor de TI');
    $obj->__set('salario', 7200);
    //echo $obj->__get('nome') . " possui " . $obj->__get('numFilhos') . " filho(s).<br>Cargo: " . $obj->__get('cargo') . "<br>Salário: R$" . $obj->__get('salario');
    echo $obj->resumirCadFunc();

    echo "<hr>";

    $obj1 = new Funcionario();
    $obj1->__set('nome', 'João');
    $obj1->__set('numFilhos', 4);
    $obj1->__set('cargo', 'Diretor de TI');
    $obj1->__set('salario', 10 . "." . 200);
    //echo $obj1->__get('nome') . " possui " . $obj1->__get('numFilhos') . " filho(s).<br>Cargo: " . $obj1->__get('cargo') . "<br>Salário: R$" . $obj1->__get('salario');
    echo $obj1->resumirCadFunc();


?>