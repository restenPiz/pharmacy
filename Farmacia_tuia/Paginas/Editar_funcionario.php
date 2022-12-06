<?php
    session_start();
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
                        <h4 class="text-themecolor">Edit Doctor</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Edit Doctor</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
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
                                <h5 class="card-title">Basic Information</h5>
                                <form class="form-material form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-text">Name</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="example-text" name="example-text" class="form-control" placeholder="enter your name" value="Jonathan Doe">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="bdate">Date of Birth</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="bdate" name="bdate" class="form-control mydatepicker" placeholder="enter your birth date" value="12/10/2017">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Gender</label>
                                        <div class="col-sm-12">
                                            <select class="form-control">
                                                <option>Select Gender</option>
                                                <option selected="selected">Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Profile Image</label>
                                        <div class="col-sm-12">
                                            <img class="img-responsive" src="../plugins/images/users/d1.jpg" alt="" style="max-width:120px;">
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="special">Speciality</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="special" name="special" class="form-control" placeholder="e.g. Dentist" value="Neurosurgeon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Description</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="url">Website URL</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="url" name="url" class="form-control" placeholder="your website" value="http://www.example-website.com">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Doctor's Account Information</h5>
                                <form class="form-material form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-email">Email</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="enter your email" value="jondoe@ex.com">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-phone">Phone</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="example-phone" name="example-phone" class="form-control" placeholder="enter your phone" data-mask="(999) 999-9999" value="(123) 456-7890">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="pwd">Password</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="password" id="pwd" name="pwd" class="form-control" placeholder="enter your password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="cpwd">Confirm Password</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="password" id="cpwd" name="cpwd" class="form-control" placeholder="confirm your password">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Doctor's Social Information</h5>
                                <form class="form-material form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-12" for="furl">Facebook URL</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="furl" name="furl" class="form-control" value="http://www.facebook.com/username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="turl">Twitter URL</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="turl" name="turl" class="form-control" value="http://www.twitter.com/username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="gurl">Google Plus URL</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="gurl" name="gurl" class="form-control" value="http://www.plus.google.com/username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="inurl">LinkedIN URL</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="inurl" name="inurl" class="form-control" value="http://www.linkedin.com/username">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>
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
                                                
    <?php
        include '../Layout/Script.php';
    ?>

</body>

</html>