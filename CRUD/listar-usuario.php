<h1>Listar Usuários</h1>
<?php

    $sql = "SELECT * FROM usuarios"; //query selecionando todos os itens da tabela usuarios

    $result = $conexao->query($sql); //executando a query a partir da conexao

    $qtd = $result->num_rows; //retornando o número de linhas do ressultado da consulta

?>