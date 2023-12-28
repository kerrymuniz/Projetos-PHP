<?php

    class MinhaExceptionCustomizada extends Exception {

        private $erro = '';

        public function __construct($erro)
        {
            $this->erro = $erro;
        }

        public function exibirMensagemCustomizada()
        {
            return $this->erro;
        }
    }

    try
    {
        throw new MinhaExceptionCustomizada('Esse é um erro de teste');

        //Error (php)
        //Exception -> comum no dia-dia
        //Customizadas -> comum no dia-dia

    } catch(MinhaExceptionCustomizada $e) {
        echo $e->exibirMensagemCustomizada();
    }

?>