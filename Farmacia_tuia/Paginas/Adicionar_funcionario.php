<?php
    //Inicio de sessao
    session_start();

    //Incluido o ficheiro de conexao com a base de dados
    include('../Formulario-PHP/Conexao.php');
    include_once('../Formulario-PHP/Conexao.php');

    if(isset($_POST['Submit'])){

        //Fazendo a captura dos dados
        $nome=mysqli_real_escape_string($conexao, $_POST['Nome']);
        $data=mysqli_real_escape_string($conexao,$_POST['Data']);
        $sexo=mysqli_real_escape_string($conexao,$_POST['Sexo']);
        $morada=mysqli_real_escape_string($conexao,$_POST['Morada']);
        $especialidade=mysqli_real_escape_string($conexao,$_POST['Especialidade']);
        $numero_bi=mysqli_real_escape_string($conexao,$_POST['BI']);

        //Inicio dos operadores de condicao
        if(empty($_POST['Nome']) && empty($_POST['Data']) && empty($_POST['Sexo']) && empty($_POST['Morada']) && empty($_POST['Especialidade']) && empty($_POST['BI'])){
            //Manda o usuario para a pagina de inicio / tela de formulario    
            header('Location: ../Paginas/Adiconar_funcionario.php');
            exit();
        
        }else{
            //Salvando os dados
            $_SESSION['Nome']=$nome;
            $_SESSION['Data']=$data;
            $_SESSION['Sexo']=$sexo;
            $_SESSION['BI']=$numero_bi;
            $_SESSION['Morada']=$morada;
            $_SESSION['Especialidade']=$especialidade;
            
            //Metodo de insercao de valores dentro da tabela funcionario
            $query=mysqli_query($conexao, "INSERT INTO funcionario(Nome,Data_Nascimento,Sexo,Morada,Especialidade,Numero_bi) values ('$nome','$data','$sexo','$morada','$especialidade','$numero_bi')");
    
            header('Location: ../Paginas/Adicionar_funcionar.php');
            exit();

        }    
    }

?>

<!DOCTYPE html>
<html lang="en">

<?php
    include '../Layout/Head.php';
?>

<body class="skin-megna fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite Hospital</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        
        <?php
            include '../Layout/Header.php';
        ?>

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        
        <?php
            include '../Layout/Aside.php';
        ?>

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Funcionario</h4>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Adicionar Funcionario</h5><br>
                                <form class="form-material form-horizontal" action="../Paginas/Adicionar_funcionario.php" method="POST">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <input type="text" placeholder="Nome Completo" name="Nome" class="form-control" required>
                                        </div>
                                        <div class="col">
                                            <input type="date" placeholder="Data de Nascimento" name="Data" class="form-control" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" placeholder="Morada" name="Morada" class="form-control" required>
                                        </div>
                                    </div><br><br>
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <input type="text" placeholder="Especialidade" name="Especialidade" class="form-control" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" placeholder="Numero de BI" name="Numero_bi" class="form-control" required>
                                        </div>
                                        <div class="col">
                                            <select class="form-control custom-select" name="Sexo" data-placeholder="Choose a Category" tabindex="1">
                                                <option value="Sexo">Sexo</option>
                                                <option value="Femenino">Femenino</option>
                                                <option value="Masculino">Masculino</option>
                                            </select>
                                        </div>
                                    </div><br><br>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-actions">
                                        <button type="submit" name="Submit" style="border:0; border-radius:0 0; width:10rem;" class="btn btn-success"> <i class="fa fa-check"></i> Salvar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        
        <?php
            include '../Layout/Footer.php';
        ?>
        
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    
    <?php
        include '../Layout/Script.php';
    ?>

</body>

</html>