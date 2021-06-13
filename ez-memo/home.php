<?php
session_start();
include 'Controller/koneksi.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, Monsterlite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>EZ Memo Dashboard</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/logo_final.png">
    <!-- Custom CSS -->
    <link href="assets/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>

p {
    word-break: break-all;
    white-space: normal;
}

div.b {
  word-wrap: break-word;
}
</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md ">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand justify-content-center" href="home.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/logo_final.png" width="150px"  alt="homepage" class="dark-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    
                    
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <div class="b">
                        <li class="sidebar-item" > <a class="sidebar-link waves-effect waves-dark sidebar-link active"
                                 aria-expanded="false"><p style="font-size:12"> <!--<i class="fa fa-user" aria-hidden="true"></i>--><?php echo $_SESSION['email']?></p></a></li>
                        </div>
                       
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="home.php" aria-expanded="false"><i class="mr-3 fas fa-sticky-note"
                                    aria-hidden="true"></i><span class="hide-menu">Memo/Note Saya</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="note-baru.php" aria-expanded="false"><i class="mr-3  fas fa-pencil-alt"
                                    aria-hidden="true"></i><span class="hide-menu">Memo/Note Baru</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="Controller/logout.php" aria-expanded="false"><i class="mr-3 fas fa-sign-out-alt"
                                    aria-hidden="true"></i><span class="hide-menu">Logout</span></a></li>
                       
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Note Saya</h3>
                        <h6 style="color: green">
                    <?php
		                if(isset($_GET['pesan'])){
			                if($_GET['pesan'] == "berhasil"){
				                echo "Note berhasil dibuat!";
			                }
		                }
                    ?></h6>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-right upgrade-btn">
                            <a href="note-baru.php"
                                class="btn btn-success d-none d-md-inline-block text-white" ><i class="fas fa-plus"></i>Tambah Note</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <?php
                         $id_user = $_SESSION['id_user'];
                         $query = mysqli_query($koneksi, "select * from memo where id_user= $id_user");
                         while($data=mysqli_fetch_array($query)) {  
                        $persentase =  (strlen($data['isi_memo'])/20000) * 100;                 
                    ?>
                    <!-- Column -->
                    <div class="col-sm-4">
                        <a href="detail.php?id_note=<?php echo $data['id_memo']?>"><div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $data['judul_memo']?></h4>
                                <div class="text-left">
                                    <span class="text-muted"><?php echo substr($data['isi_memo'], 0, 39)?></span>
                                </div>
                                <span class="text-info"><?php echo strlen($data['isi_memo'])." dari 20.000 character"?></span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: <?php echo $persentase?>%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <span class="text-success"><?php echo $persentase."% diguakan"?><span>
                                <!--<p class="text-muted"><i class="ti-arrow-up text-info"></i> <?php echo "created: ".$data['created_at']?></p>-->
                                <p class="text-muted"><i class="ti-arrow-up text-info"></i> <?php echo "updated: ".$data['updated_at']?></p>
                               

                            </div>
                        </div></a>
                    </div>
                    <!-- Column -->
                         <?php }?>
                </div>
               
               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                © 2021 EZ Memo by <a href="">Dandy Nizam Achmady</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>