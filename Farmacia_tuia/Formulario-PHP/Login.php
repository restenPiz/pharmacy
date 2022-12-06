<?php

    //Inicio de sessao
    session_start();

    //Incluindo o arquivo de conexao com a base de dados
    include('./Conexao.php');

    //Iniciando com os operadores de condicao
    if(empty($_POST['Usuario']) && empty($_POST['Senha'])){
        //Vai lhe redicionar para o mesmo local
        header('Location: Index.php');
        exit();
    }
    
    //Inicio dos metodos de Confirmacao de uma string
    $usuario=mysqli_real_escape_string($conexao, $_POST['Usuario']);
    $senha=mysqli_real_escape_string($conexao, $_POST['Senha']);

    //Seleccao dos valores na base de dados
    $query="select Id, Usuario from formulario where Usuario='{$usuario}' and Senha='{$senha}'";

    //Inicio dos metodos de consulta
    $select=mysqli_query($conexao, $query);

    //Consulta o numero de linhas
    $row=mysqli_num_rows($select);

    if($row==1){

        $_SESSION['Usuario']=$usuario;
        header('Location: ../Paginas/Dash.php');
        exit();
    }else{
        header('Location:Index.php');
        exit();
    }

?>