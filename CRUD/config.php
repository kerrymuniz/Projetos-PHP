<?php
    //defininddo nomes para os elementos da conexão com o banco de dados
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'projeto_crud_cadastro');

    $conexao = new MySQLi(HOST, USER, PASS, BASE);

?>