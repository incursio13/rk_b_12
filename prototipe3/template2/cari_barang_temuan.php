<!DOCTYPE html>
<?php session_start();
 if(isset($_GET['input'])){
    $_SESSION['login']='login';
    header('Location: ../backend/pages/');
 }
 elseif (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
 }
 ?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TCARI</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="../template2/index.php">Tcari</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="barang_hilang.php">Barang Hilang</a>
                    </li>
                    <li class="page-scroll">
                        <a href="barang_temuan.php">Barang Temuan</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    <?php 
                    if (isset( $_SESSION['login'])) {
                        echo '<li class="page-scroll">
                        <a href="../backend/pages/" class="portfolio-link" data-toggle="modal">User</a>
                        </li>
                        <li ><a><form action="index.php" method="get">
                            <input type="submit" name="logout" style="background:none;border:none;" value="LOGOUT">
                            </form></a>
                        </li>';
                    }
                    else{
                        echo '<li class="page-scroll">
                        <a href="#login_modal1" class="portfolio-link" data-toggle="modal">Login</a>
                        </li>';
                    }
                    
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <!-- Portfolio Grid Section -->
    <!-- Barang Hilang -->
    <br><br><br>
    <section id="barang_hilang" class="container content-section text-center">
        <div class="row">
            <div class="col-md-3">
                <h3> Pencarian Barang</h3>
                <div class="list-group">    
                    <div class="search">
                        <form method="POST" action="cari_barang_temuan.php" role="search">
                        <input type="text" name="cari" class="form-control" maxlength="30" placeholder="Search" />
                        <br>
                        <button type="submit" class="btn btn-primary btn-sm">Cari</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Hasil Pencarian Barang Temuan</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal10" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/dompet.jpg" class="img-responsive" alt="Game controller"  style="height:200px">
                    </a>
                </div>
                
            </div>       
        </div>
    </section>

    <section style="padding:0px" class="success">
    <br>
    <br>
    </section>
    
    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Bantu menemukan barang hilang.</p>
                </div>
                <div class="col-lg-4">
                    <p>sebab, hanya jika kita menemukan maka kita tahu sesuatu itu ada. Tapi jika kita tidak menemukan, kita tak bisa mengatakan bahwa sesuatu adalah tidak ada</p>
                </div>
<!--                 <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Hubungi Kami</h2>
                <h3>WA/SMS/TELP : 089872829292</h3>
                <p><a href="mailto:tcari.online@gmail.com">tcari.online@gmail.com</a>
                </p>
            </div>
        </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    
                    <div class="footer-col col-md-12 text-center">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; TCARI 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="login_modal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content" style="background-color:transparent">

            <div class="container">
               
            <div class="row col-md-8 col-lg-offset-2" style="background-color:#fff">
                <div class="close-modal" data-dismiss="modal" style="position:relative;float:right">
                <div class="lr">
                    <div class="rl"></div>
                </div>
                </div>
                    <div class="col-md-6 col-lg-offset-3">
                        <div class="modal-body">
                            <h2>LOGIN</h2>
                            <hr class="star-primary">
                            <!-- <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p> -->
                            <form action="index.php" method="get">
                                <div class="form-group">
                                    <input class="form-control" name="input" type="text" placeholder="username" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="password" required>
                                </div>
                                <button class="btn btn-success btn-lg" type="submit">login</button>
                                <!-- <a href="../backend/pages/home.html" class="btn btn-success btn-lg">LOGIN</a> -->
                            </form>
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Dompet</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/dompet.jpg" class="img-responsive img-centered" alt=""  style="max-width:70%">
                            <p>Saya telah menemukan dompet</p>
                            <ul class="list-inline item-details" style="margin-bottom:7px">
                                <li>Lokasi ditemukan:
                                    <strong><a href="">PB1</a>
                                    </strong>
                                </li>
                            <ul class="list-inline item-details" style="margin-top:7px">
                                <li>Ditemukan oleh:
                                    <strong><a href="">User</a>
                                    </strong>
                                </li>
                                <li>Tanggal ditemukan:
                                    <strong><a href="">24 April 2017</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </script>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
