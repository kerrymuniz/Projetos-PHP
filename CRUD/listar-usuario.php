<h1>Listar Usuários</h1>
<?php

    $sql = "SELECT * FROM usuarios"; //query selecionando todos os itens da tabela usuarios

    $result = mysqli_query($conexao, $sql); //executando a query a partir da conexao

    $qtd = mysqli_num_rows($result); //retornando o número de linhas do ressultado da consulta

    if($qtd > 0)
    {
        echo "<table class='table table-striped table-bordered table-hover'>";
                echo "<tr>";
                echo "<th>#</th>";
                echo "<th>Nome</th>";
                echo "<th>Email</th>";
                echo "<th>Data de Nascimento</th>";
                echo "<th>Ações</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>" . $row["Id"] . "</td>";
                echo "<td>" . $row["Nome"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "<td>" . $row["Data_nasc"] . "</td>";
                echo "<td>
                        <button oneclick=\"location.href='?page=editar&id=". $row["Id"] . "';\" class='btn btn-success'>Editar</button>
                        <button class='btn btn-danger'>Excluir</button>
                    </td>";
                echo "</tr>";
            }
        echo "</table>";
    } else {
        echo "<p class='alert alert-danger'>Não foi possível encontrar resultados!</p>";
    }

?>