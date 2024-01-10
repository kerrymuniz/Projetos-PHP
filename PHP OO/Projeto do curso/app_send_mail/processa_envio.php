<?php

    // echo '<pre>';
    // print_r($_POST);
    // echo '<pre>';

    class Mensagem {
        private $para = null;
        private $assunto = null;
        private $mensagem = null;

        public function __get($attr)
        {
            return $this->$attr;
        }

        public function __set($attr, $value)
        {
            $this->$attr = $value;
        }

        public function mensagemValida()
        {
            if(empty($this->para) || empty($this->assunto) || empty($this->mensagem))
            {
                return false;
            }

            return true;
        }
    }

    $mensagem = new Mensagem();

    $mensagem->__set('para', $_POST['para']);
    $mensagem->__set('assunto', $_POST['assunto']);
    $mensagem->__set('mensagem', $_POST['mensagem']);
    //print_r($mensagem);

    if($mensagem->mensagemValida())
    {
        echo 'Mensagem é válida';
    } else {
        echo 'Mensagem inválida';
    }

?>