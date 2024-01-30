<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'cafeteria';
    $port = '3307';

    $conexao = mysqli_connect($hostname, $username, $password, $database, $port);

    // Verificar a conexão
    if (!$conexao) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    // Configurar o conjunto de caracteres para UTF-8
    mysqli_set_charset($conexao, 'utf8');
?>
