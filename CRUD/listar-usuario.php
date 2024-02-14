<h1>Listar Usuários</h1>
<?php

    $sql = "SELECT * FROM usuarios"; //query selecionando todos os itens da tabela usuarios

    $result = $conexao->query($sql); //executando a query a partir da conexao

    $qtd = $result->num_rows; //retornando o número de linhas do ressultado da consulta

    if($qtd > 0) {
        while($row = $result->fetch_object()) {
            print $row->id;
            print $row->nome;
            print $row->email;
            print $row->data_nasc;
        }
    } else {
        print "<p class='alert alert-danger'>Não foi possível encontrar resultados!</p>";
    }

?>