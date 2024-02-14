<?php

    switch($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios(Nome, Email, Senha, Data_nasc) VALUES('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            $result = $conexao->query($sql);
            break;
        case 'editar':
            //code
            break;
        case 'excluir';
            //code
            break;
    }

?>