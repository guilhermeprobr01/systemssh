<?php

    $dbHost = 'sql202.epizy.com';
    $dbUsername = 'epiz_30879851';
    $dbPassword = 'TlAq1d2BogcPGr';
    $dbName = 'epiz_30879851_usuários';
    
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