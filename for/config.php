<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'usuarios';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName) or die;

    // if($conexao->connect_errno)
    // {r
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>