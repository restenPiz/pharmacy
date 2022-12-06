<?php
    
    session_start();

    include('../Formulario-PHP/Conexao.php');

    //inicio dos operadores de condicao
    if(isset($_POST['submit'])){

        //Fazendo captura dos campos preenchidos pelo usuario
        $nome=mysqli_real_escape_string($conexao,$_POST['Nome']);
        $preco=mysqli_real_escape_string($conexao,$_POST['Preco']);
        $iim=mysqli_real_escape_string($conexao,$_POST['IIM']);
        $ifm=mysqli_real_escape_string($conexao,$_POST['IFM']);
        $saidas=mysqli_real_escape_string($conexao,$_POST['Saidas']);
        $total=mysqli_real_escape_string($conexao,$_POST['Total']);

        //Inicio do operador de condicao que faz a validacao
        if(empty($_POST['Nome']) && empty($_POST['Preco']) && empty($_POST['IIM']) && empty($_POST['IFM']) && empty($_POST['Saidas']) && empty($_POST['Total'])){
            
            //Se a condicao for valida, vai mandar para outra localizacao
            header('Location: ../Paginas/Dash.php');
            exit();

        }else{

            //Salvando os dados capturados
            $_SESSION['Nome']=$nome;
            $_SESSION['Preco']=$preco;
            $_SESSION['IIM']=$iim;
            $_SESSION['IFM']=$ifm;
            $_SESSION['Saidas']=$saidas;
            $_SESSION['Total']=$total;

            //Caso nao, ele vai fazer a insercao dos dados na base de dados
            $query=mysqli_query($conexao,"INSERT INTO produto(Nome,Preco,IIM,IFM,Saidas,Total) VALUES ('$nome','$preco', '$iim','$ifm','$saidas','$total')");

            //Manda para outra localizacao diferente da paginas
            header('Location: ../Paginas/Dash.php');
            exit();
            //Fecha a sessao e sai da tela
        }

    }

?>

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
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        
        <?php
            include '../Layout/Aside.php';
        ?>
        
        <!-- ============================================================== -->
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
                        <h4 class="text-themecolor">Produto</h4>
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
                                <h5 class="card-title">Adicionar Produto</h5><br>
                                <form class="form-material form-horizontal" method="POST" action="../Paginas/Adicionar_Produtos.php">
                                    <div class="row align-items-center">
                                            <div class="col">
                                                <input type="text" placeholder="Nome do Produto" name="Nome" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <input type="numeric" placeholder="Preco" name="Preco" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <input type="numeric" placeholder="Saidas" name="Saidas" class="form-control" required>
                                            </div>
                                        </div><br><br>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <input type="numeric" placeholder="IIM" name="IIM" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <input type="numeric" placeholder="IFM" name="IFM" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <input type="numeric" placeholder="Total" name="Total" class="form-control" required>
                                            </div>
                                        </div><br><br>
                                        <div class="form-actions">
                                            <button type="submit"name="submit"id="Buton1" style="border:0; border-radius:0 0; width:10rem;" class="btn btn-success"> <i class="fa fa-check"></i> Salvar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
       
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme working">6</a></li>
                            <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
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
    <!-- All Jquery -->
    
    <?php
        include '../Layout/Script.php';
    ?>

</body>

</html>