<?php

    switch($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios(Nome, Email, Senha, Data_nasc) VALUES('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            $result = $conexao->query($sql);

            if($result == true) {
                print "<script>alert('Cadastro realizado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível realizar o cadastro. Por favor tentar novamente..');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET
                        Nome='{$nome}',
                        Email='{$email}',
                        Senha='{$senha}',
                        Data_nasc='{$data_nasc}'
                    WHERE
                        id=".$_REQUEST["id"];

            $result = $conexao->query($sql);

            if($result == true) {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível editar. Por favor tentar novamente..');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'excluir';
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $result = $conexao->query($sql);

            if($result == true) {
                print "<script>alert('Usuário excluído com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível excluir o usuário. Por favor tentar novamente..');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
    }

?>