<?php

    //Declarando as variaveis de conexao
    define('Host','127.0.0.1');
    define('User','root');
    define('Password','');
    define('DB','farmacia_tuia');

    //Metodo de conexao do mysqli
    $conexao=mysqli_connect(Host,User,Password,DB) or die ('Conexao nao estabelecida');

?>