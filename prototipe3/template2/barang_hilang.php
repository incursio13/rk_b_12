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

<!--     <link href="css/custom.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  

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
                    <li><a href="#" class="hide-search" data-command="toggle-search" data-placement="top"><i class="fa fa-search"></i></a></li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <div class="row" style="display: none;">
                <form method="POST" action="cari_barang_hilang.php" role="search">
                    <div class="col-xs-12">
                        <div class="input-group c-search">
                            <input type="text" class="form-control" name="search" id="contact-list-search" placeholder="Search..." style="width: 45%; float: right;">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search text-muted"></span></button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->
    </nav>


    <!-- Portfolio Grid Section -->
    <!-- Barang Hilang -->
    <br><br><br>
    <section id="portfolio" class="container content-section text-center">
        <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Daftar Lengkap Barang Hilang</h2>
                        <hr class="star-primary">
                        <br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 portfolio-item">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/iphone6.jpg" class="img-responsive" alt="Cabin" style="height:200px">
                        </a>
                    </div>
                    <div class="col-sm-3 portfolio-item">
                        <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/laptop.jpg" class="img-responsive" alt="Slice of cake" style="height:200px">
                        </a>
                    </div>
                    <div class="col-sm-3 portfolio-item">
                        <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal" >
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/jam.jpg" class="img-responsive" alt="Circus tent" style="height:200px">
                        </a>
                    </div>
                    <div class="col-sm-3 portfolio-item">
                        <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/dompet.jpg" class="img-responsive" alt="Game controller"  style="height:200px">
                        </a>
                    </div>
                    <div class="col-sm-3 portfolio-item">
                        <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/kunci.jpg" class="img-responsive" alt="Safe" style="height:200px">
                        </a>
                    </div>
                    <div class="col-sm-3 portfolio-item">
                        <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/charger.jpg" class="img-responsive" alt="Submarine"  style="height:200px">
                        </a>
                    </div>

                    <div class="col-sm-3 portfolio-item">
                        <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/atm.jpg" class="img-responsive" alt="Cabin" style="height:200px">
                        </a>
                    </div>

                    <div class="col-sm-3 portfolio-item">
                        <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/buku.jpg" class="img-responsive" alt="Cabin" style="height:200px">
                        </a>
                    </div>

                    <div class="col-sm-3 portfolio-item">
                        <a href="#portfolioModal9" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/kabel.jpg" class="img-responsive" alt="Cabin" style="height:200px">
                        </a>
                    </div>

                    <div class="col-sm-3 portfolio-item">
                        <a href="#portfolioModal10" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/kacamata.jpg" class="img-responsive" alt="Cabin" style="height:200px">
                        </a>
                    </div>

                    <div class="col-sm-3 portfolio-item">
                        <a href="#portfolioModal11" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/kalkulator.jpg" class="img-responsive" alt="Cabin" style="height:200px">
                        </a>
                    </div>

                    <div class="col-sm-3 portfolio-item">
                        <a href="#portfolioModal12" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="img/portfolio/tas.jpg" class="img-responsive" alt="Cabin" style="height:200px">
                        </a>
                    </div>


                    <div class="box-footer clearfix">
                    <br>
                        <ul class="pagination pagination-sm pull-center" style="margin-top:70px" >
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
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
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>iPhone 6</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/iphone6.jpg" class="img-responsive img-centered" alt="">
                            <p>Saya telah kehilangan iphone 6</p>
                            <ul class="list-inline item-details" style="margin-bottom:7px">
                                <li>Status:
                                    <strong><a href="">Not Solved</a>
                                    </strong>
                                </li>
                                <li>Tanggal hilang:
                                    <strong><a href="">1 April 2017</a>
                                    </strong>
                                </li>
                            </ul>
                            <ul class="list-inline item-details" style="margin-top:7px">
                                <li>Ditemukan oleh:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                                <li>Tanggal ditemukan:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                            </ul>
                            <?php if (isset( $_SESSION['login'])){ ?>
                            <div class="col-lg-12"  style="margin-bottom:7px">
                                <a id="1" class="portfolio-link btn btn-success" onclick="add_element(this.id)">Kirim Pesan</a>
                                <div style="display:none" id="ket1">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject:">
                                    </div>
                                    <p class="form-control">Pertanyaan keamanan ?</p>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Jawaban">
                                    </div>
                                    <textarea class="form-control compose-textarea" style="height: 100px;"></textarea>
                                    <div class="form-group" style="margin-top:7px">
                                        <input type="file" accept='image/*' name="cost"  onchange="readURL(this);" >
                                        <img id="ilang" src="" class="img-circle" style="display: block;margin: 0 auto;" alt="" />
                                    </div>
                                    <div class="pull-right" style="margin-top:7px">
                                        <button id="1" class="btn" onclick="batal(this.id)">Batal</button>
                                        <button id="1" class="btn btn-success" onclick="batal(this.id)" data-dismiss="modal">Kirim</button>
                                    </div>
                                </div>
                            </div> <?php } ?>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>Laptop msi</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/laptop.jpg" class="img-responsive img-centered" alt="">
                            <p>Saya telah kehilangan laptop msi</p>
                            <ul class="list-inline item-details" style="margin-bottom:7px">
                                <li>Status:
                                    <strong><a href="">Not Solved</a>
                                    </strong>
                                </li>
                                <li>Tanggal hilang:
                                    <strong><a href="">29 April 2017</a>
                                    </strong>
                                </li>
                            </ul>
                            <ul class="list-inline item-details" style="margin-top:7px">
                                <li>Ditemukan oleh:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                                <li>Tanggal ditemukan:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                            </ul>
                            <?php if (isset( $_SESSION['login'])){ ?>
                            <div class="col-lg-12"  style="margin-bottom:7px">
                                <a id="2" class="portfolio-link btn btn-success" onclick="add_element(this.id)">Kirim Pesan</a>
                                <div style="display:none" id="ket2">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject:">
                                    </div>
                                    <p class="form-control">Pertanyaan keamanan ?</p>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Jawaban">
                                    </div>
                                    <textarea class="form-control compose-textarea" style="height: 100px;"></textarea>
                                    <div class="form-group" style="margin-top:7px">
                                        <input type="file" accept='image/*' name="cost"  onchange="readURL(this);" >
                                        <img id="ilang" src="" class="img-circle" style="display: block;margin: 0 auto;" alt="" />
                                    </div>
                                    <div class="pull-right" style="margin-top:7px">
                                        <button id="2" class="btn" onclick="batal(this.id)">Batal</button>
                                        <button id="2" class="btn btn-success" onclick="batal(this.id)" data-dismiss="modal">Kirim</button>
                                    </div>
                                </div>
                            </div> <?php } ?>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>Jam Tangan</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/jam.jpg" class="img-responsive img-centered" alt="" style="max-width:70%">
                            <p>Saya telah kehilangan jam tangan</p>
                            <ul class="list-inline item-details" style="margin-bottom:7px">
                                <li>Status:
                                    <strong><a href="">Not Solved</a>
                                    </strong>
                                </li>
                                <li>Tanggal hilang:
                                    <strong><a href="">1 Mei 2017</a>
                                    </strong>
                                </li>
                            </ul>
                            <ul class="list-inline item-details" style="margin-top:7px">
                                <li>Ditemukan oleh:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                                <li>Tanggal ditemukan:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                            </ul>
                            <?php if (isset( $_SESSION['login'])){ ?>
                            <div class="col-lg-12"  style="margin-bottom:7px">
                                <a id="3" class="portfolio-link btn btn-success" onclick="add_element(this.id)">Kirim Pesan</a>
                                <div style="display:none" id="ket3">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject:">
                                    </div>
                                    <p class="form-control">Pertanyaan keamanan ?</p>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Jawaban">
                                    </div>
                                    <textarea class="form-control compose-textarea" style="height: 100px;"></textarea>
                                    <div class="form-group" style="margin-top:7px">
                                        <input type="file" accept='image/*' name="cost"  onchange="readURL(this);" >
                                        <img id="ilang" src="" class="img-circle" style="display: block;margin: 0 auto;" alt="" />
                                    </div>
                                    <div class="pull-right" style="margin-top:7px">
                                        <button id="3" class="btn" onclick="batal(this.id)">Batal</button>
                                        <button id="3" class="btn btn-success" onclick="batal(this.id)" data-dismiss="modal">Kirim</button>
                                    </div>
                                </div>
                            </div> <?php } ?>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <p>Saya telah kehilangan dompet</p>
                            <ul class="list-inline item-details" style="margin-bottom:7px">
                                <li>Status:
                                    <strong><a href="">Solved</a>
                                    </strong>
                                </li>
                                <li>Tanggal hilang:
                                    <strong><a href="">23 April 2017</a>
                                    </strong>
                                </li>
                            </ul>
                            <ul class="list-inline item-details" style="margin-top:7px">
                                <li>Ditemukan oleh:
                                    <strong><a href="">Hendri Febriansyah</a>
                                    </strong>
                                </li>
                                <li>Tanggal ditemukan:
                                    <strong><a href="">24 April 2017</a>
                                    </strong>
                                </li>
                            </ul>
                            <?php if (isset( $_SESSION['login'])){ ?>
                            <div class="col-lg-12"  style="margin-bottom:7px">
                                <a id="4" class="portfolio-link btn btn-success" onclick="add_element(this.id)">Kirim Pesan</a>
                                <div style="display:none" id="ket4">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject:">
                                    </div>
                                    <p class="form-control">Pertanyaan keamanan ?</p>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Jawaban">
                                    </div>
                                    <textarea class="form-control compose-textarea" style="height: 100px;"></textarea>
                                    <div class="form-group" style="margin-top:7px">
                                        <input type="file" accept='image/*' name="cost"  onchange="readURL(this);" >
                                        <img id="ilang" src="" class="img-circle" style="display: block;margin: 0 auto;" alt="" />
                                    </div>
                                    <div class="pull-right" style="margin-top:7px">
                                        <button id="4" class="btn" onclick="batal(this.id)">Batal</button>
                                        <button id="4" class="btn btn-success" onclick="batal(this.id)" data-dismiss="modal">Kirim</button>
                                    </div>
                                </div>
                            </div> <?php } ?>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>Kunci Motor</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/kunci.jpg" class="img-responsive img-centered" alt="">
                            <p>Saya telah kehilangan kunci motor</p>
                            <ul class="list-inline item-details" style="margin-bottom:7px">
                                <li>Status:
                                    <strong><a href="">Not Solved</a>
                                    </strong>
                                </li>
                                <li>Tanggal hilang:
                                    <strong><a href="">2 Mei 2017</a>
                                    </strong>
                                </li>
                            </ul>
                            <ul class="list-inline item-details" style="margin-top:7px">
                                <li>Ditemukan oleh:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                                <li>Tanggal ditemukan:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                            </ul>
                            <?php if (isset( $_SESSION['login'])){ ?>
                            <div class="col-lg-12"  style="margin-bottom:7px">
                                <a id="5" class="portfolio-link btn btn-success" onclick="add_element(this.id)">Kirim Pesan</a>
                                <div style="display:none" id="ket5">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject:">
                                    </div>
                                    <p class="form-control">Pertanyaan keamanan ?</p>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Jawaban">
                                    </div>
                                    <textarea class="form-control compose-textarea" style="height: 100px;"></textarea>
                                    <div class="form-group" style="margin-top:7px">
                                        <input type="file" accept='image/*' name="cost"  onchange="readURL(this);" >
                                        <img id="ilang" src="" class="img-circle" style="display: block;margin: 0 auto;" alt="" />
                                    </div>
                                    <div class="pull-right" style="margin-top:7px">
                                        <button id="5" class="btn" onclick="batal(this.id)">Batal</button>
                                        <button id="5" class="btn btn-success" onclick="batal(this.id)" data-dismiss="modal">Kirim</button>
                                    </div>
                                </div>
                            </div> <?php } ?>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>Charger Laptop Acer</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/charger.jpg" class="img-responsive img-centered" alt="">
                            <p>Saya telah kehilangan charger laptop acer</p>
                            <ul class="list-inline item-details" style="margin-bottom:7px">
                                <li>Status:
                                    <strong><a href="">Not Solved</a>
                                    </strong>
                                </li>
                                <li>Tanggal hilang:
                                    <strong><a href="">30 April 2017</a>
                                    </strong>
                                </li>
                            </ul>
                            <ul class="list-inline item-details" style="margin-top:7px">
                                <li>Ditemukan oleh:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                                <li>Tanggal ditemukan:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                            </ul>
                            <?php if (isset( $_SESSION['login'])){ ?>
                            <div class="col-lg-12"  style="margin-bottom:7px">
                                <a id="6" class="portfolio-link btn btn-success" onclick="add_element(this.id)">Kirim Pesan</a>
                                <div style="display:none" id="ket6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject:">
                                    </div>
                                    <p class="form-control">Pertanyaan keamanan ?</p>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Jawaban">
                                    </div>
                                    <textarea class="form-control compose-textarea" style="height: 100px;"></textarea>
                                    <div class="form-group" style="margin-top:7px">
                                        <input type="file" accept='image/*' name="cost"  onchange="readURL(this);" >
                                        <img id="ilang" src="" class="img-circle" style="display: block;margin: 0 auto;" alt="" />
                                    </div>
                                    <div class="pull-right" style="margin-top:7px">
                                        <button id="6" class="btn" onclick="batal(this.id)">Batal</button>
                                        <button id="6" class="btn btn-success" onclick="batal(this.id)" data-dismiss="modal">Kirim</button>
                                    </div>
                                </div>
                            </div> <?php } ?>
                            <button id="btnSubmit" type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>Kartu atm BCA</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/atm.jpg" class="img-responsive img-centered" alt="">
                            <p>Saya telah kehilangan atm bca</p>
                            <ul class="list-inline item-details" style="margin-bottom:7px">
                                <li>Status:
                                    <strong><a href="">Not Solved</a>
                                    </strong>
                                </li>
                                <li>Tanggal hilang:
                                    <strong><a href="">29 April 2017</a>
                                    </strong>
                                </li>
                            </ul>
                            <ul class="list-inline item-details" style="margin-top:7px">
                                <li>Ditemukan oleh:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                                <li>Tanggal ditemukan:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                            </ul>
                            <?php if (isset( $_SESSION['login'])){ ?>
                            <div class="col-lg-12"  style="margin-bottom:7px">
                                <a id="7" class="portfolio-link btn btn-success" onclick="add_element(this.id)">Kirim Pesan</a>
                                <div style="display:none" id="ket7">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject:">
                                    </div>
                                    <p class="form-control">Pertanyaan keamanan ?</p>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Jawaban">
                                    </div>
                                    <textarea class="form-control compose-textarea" style="height: 100px;"></textarea>
                                    <div class="form-group" style="margin-top:7px">
                                        <input type="file" accept='image/*' name="cost"  onchange="readURL(this);" >
                                        <img id="ilang" src="" class="img-circle" style="display: block;margin: 0 auto;" alt="" />
                                    </div>
                                    <div class="pull-right" style="margin-top:7px">
                                        <button id="7" class="btn" onclick="batal(this.id)">Batal</button>
                                        <button id="7" class="btn btn-success" onclick="batal(this.id)" data-dismiss="modal">Kirim</button>
                                    </div>
                                </div>
                            </div> <?php } ?>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>buku c++</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/buku.jpg" class="img-responsive img-centered" alt="">
                            <p>Saya telah kehilangan bukuc++</p>
                            <ul class="list-inline item-details" style="margin-bottom:7px">
                                <li>Status:
                                    <strong><a href="">Not Solved</a>
                                    </strong>
                                </li>
                                <li>Tanggal hilang:
                                    <strong><a href="">30 April 2017</a>
                                    </strong>
                                </li>
                            </ul>
                            <ul class="list-inline item-details" style="margin-top:7px">
                                <li>Ditemukan oleh:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                                <li>Tanggal ditemukan:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                            </ul>
                            <?php if (isset( $_SESSION['login'])){ ?>
                            <div class="col-lg-12"  style="margin-bottom:7px">
                                <a id="8" class="portfolio-link btn btn-success" onclick="add_element(this.id)">Kirim Pesan</a>
                                <div style="display:none" id="ket8">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject:">
                                    </div>
                                    <p class="form-control">Pertanyaan keamanan ?</p>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Jawaban">
                                    </div>
                                    <textarea class="form-control compose-textarea" style="height: 100px;"></textarea>
                                    <div class="form-group" style="margin-top:7px">
                                        <input type="file" accept='image/*' name="cost"  onchange="readURL(this);" >
                                        <img id="ilang" src="" class="img-circle" style="display: block;margin: 0 auto;" alt="" />
                                    </div>
                                    <div class="pull-right" style="margin-top:7px">
                                        <button id="8" class="btn" onclick="batal(this.id)">Batal</button>
                                        <button id="8" class="btn btn-success" onclick="batal(this.id)" data-dismiss="modal">Kirim</button>
                                    </div>
                                </div>
                            </div> <?php } ?>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>Kabel rj45</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/kabel.jpg" class="img-responsive img-centered" alt="">
                            <p>Saya telah kehilangan kabel rj45</p>
                            <ul class="list-inline item-details" style="margin-bottom:7px">
                                <li>Status:
                                    <strong><a href="">Not Solved</a>
                                    </strong>
                                </li>
                                <li>Tanggal hilang:
                                    <strong><a href="">01 Mei 2017</a>
                                    </strong>
                                </li>
                            </ul>
                            <ul class="list-inline item-details" style="margin-top:7px">
                                <li>Ditemukan oleh:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                                <li>Tanggal ditemukan:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                            </ul>
                            <?php if (isset( $_SESSION['login'])){ ?>
                            <div class="col-lg-12"  style="margin-bottom:7px">
                                <a id="9" class="portfolio-link btn btn-success" onclick="add_element(this.id)">Kirim Pesan</a>
                                <div style="display:none" id="ket9">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject:">
                                    </div>
                                    <p class="form-control">Pertanyaan keamanan ?</p>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Jawaban">
                                    </div>
                                    <textarea class="form-control compose-textarea" style="height: 100px;"></textarea>
                                    <div class="form-group" style="margin-top:7px">
                                        <input type="file" accept='image/*' name="cost"  onchange="readURL(this);" >
                                        <img id="ilang" src="" class="img-circle" style="display: block;margin: 0 auto;" alt="" />
                                    </div>
                                    <div class="pull-right" style="margin-top:7px">
                                        <button id="9" class="btn" onclick="batal(this.id)">Batal</button>
                                        <button id="9" class="btn btn-success" onclick="batal(this.id)" data-dismiss="modal">Kirim</button>
                                    </div>
                                </div>
                            </div> <?php } ?>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
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
                            <h2>kacamata</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/kacamata.jpg" class="img-responsive img-centered" alt="">
                            <p>Saya telah kehilangan kacamata</p>
                            <ul class="list-inline item-details" style="margin-bottom:7px">
                                <li>Status:
                                    <strong><a href="">Not Solved</a>
                                    </strong>
                                </li>
                                <li>Tanggal hilang:
                                    <strong><a href="">02 Mei 2017</a>
                                    </strong>
                                </li>
                            </ul>
                            <ul class="list-inline item-details" style="margin-top:7px">
                                <li>Ditemukan oleh:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                                <li>Tanggal ditemukan:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                            </ul>
                            <?php if (isset( $_SESSION['login'])){ ?>
                            <div class="col-lg-12"  style="margin-bottom:7px">
                                <a id="10" class="portfolio-link btn btn-success" onclick="add_element(this.id)">Kirim Pesan</a>
                                <div style="display:none" id="ket10">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject:">
                                    </div>
                                    <p class="form-control">Pertanyaan keamanan ?</p>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Jawaban">
                                    </div>
                                    <textarea class="form-control compose-textarea" style="height: 100px;"></textarea>
                                    <div class="form-group" style="margin-top:7px">
                                        <input type="file" accept='image/*' name="cost"  onchange="readURL(this);" >
                                        <img id="ilang" src="" class="img-circle" style="display: block;margin: 0 auto;" alt="" />
                                    </div>
                                    <div class="pull-right" style="margin-top:7px">
                                        <button id="10" class="btn" onclick="batal(this.id)">Batal</button>
                                        <button id="10" class="btn btn-success" onclick="batal(this.id)" data-dismiss="modal">Kirim</button>
                                    </div>
                                </div>
                            </div> <?php } ?>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>kalkulator</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/kalkulator.jpg" class="img-responsive img-centered" alt="">
                            <p>Saya telah kehilangan kalkulator</p>
                            <ul class="list-inline item-details" style="margin-bottom:7px">
                                <li>Status:
                                    <strong><a href="">Not Solved</a>
                                    </strong>
                                </li>
                                <li>Tanggal hilang:
                                    <strong><a href="">03 Mei 2017</a>
                                    </strong>
                                </li>
                            </ul>
                            <ul class="list-inline item-details" style="margin-top:7px">
                                <li>Ditemukan oleh:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                                <li>Tanggal ditemukan:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                            </ul>
                            <?php if (isset( $_SESSION['login'])){ ?>
                            <div class="col-lg-12"  style="margin-bottom:7px">
                                <a id="11" class="portfolio-link btn btn-success" onclick="add_element(this.id)">Kirim Pesan</a>
                                <div style="display:none" id="ket11">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject:">
                                    </div>
                                    <p class="form-control">Pertanyaan keamanan ?</p>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Jawaban">
                                    </div>
                                    <textarea class="form-control compose-textarea" style="height: 100px;"></textarea>
                                    <div class="form-group" style="margin-top:7px">
                                        <input type="file" accept='image/*' name="cost"  onchange="readURL(this);" >
                                        <img id="ilang" src="" class="img-circle" style="display: block;margin: 0 auto;" alt="" />
                                    </div>
                                    <div class="pull-right" style="margin-top:7px">
                                        <button id="11" class="btn" onclick="batal(this.id)">Batal</button>
                                        <button id="11" class="btn btn-success" onclick="batal(this.id)" data-dismiss="modal">Kirim</button>
                                    </div>
                                </div>
                            </div> <?php } ?>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>tas</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/tas.jpg" class="img-responsive img-centered" alt="">
                            <p>Saya telah kehilangan tas</p>
                            <ul class="list-inline item-details" style="margin-bottom:7px">
                                <li>Status:
                                    <strong><a href="">Not Solved</a>
                                    </strong>
                                </li>
                                <li>Tanggal hilang:
                                    <strong><a href="">03 Mei 2017</a>
                                    </strong>
                                </li>
                            </ul>
                            <ul class="list-inline item-details" style="margin-top:7px">
                                <li>Ditemukan oleh:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                                <li>Tanggal ditemukan:
                                    <strong><a href="">-</a>
                                    </strong>
                                </li>
                            </ul>
                            <?php if (isset( $_SESSION['login'])){ ?>
                            <div class="col-lg-12"  style="margin-bottom:7px">
                                <a id="12" class="portfolio-link btn btn-success" onclick="add_element(this.id)">Kirim Pesan</a>
                                <div style="display:none" id="ket12">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject:">
                                    </div>
                                    <p class="form-control">Pertanyaan keamanan ?</p>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Jawaban">
                                    </div>
                                    <textarea class="form-control compose-textarea" style="height: 100px;"></textarea>
                                    <div class="form-group" style="margin-top:7px">
                                        <input type="file" accept='image/*' name="cost"  onchange="readURL(this);" >
                                        <img id="ilang" src="" class="img-circle" style="display: block;margin: 0 auto;" alt="" />
                                    </div>
                                    <div class="pull-right" style="margin-top:7px">
                                        <button id="12" class="btn" onclick="batal(this.id)">Batal</button>
                                        <button id="12" class="btn btn-success" onclick="batal(this.id)" data-dismiss="modal">Kirim</button>
                                    </div>
                                </div>
                            </div> <?php } ?>
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
    <script src="../backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Page Script -->
    <script>
        function readURL(input) {
                    if (input.files && input.files[0]) {
                      var reader = new FileReader();

                      reader.onload = function (e) {
                        $('#ilang')
                        .attr('src', e.target.result)
                        .width(320)
                        .height(150);
                      };
                      reader.readAsDataURL(input.files[0]);
                    }
                  }

      function add_element(id){
        var button = document.getElementById(id);
        button.style.display ="none";

        var element = document.getElementById("ket"+id);
        element.style.display = "block";

      }

      function batal(id){
        var element = document.getElementById("ket"+id);
        element.style.display = "none";

        var button = document.getElementById(id);
        button.style.display ="inline-block";
      }

      $(function () {
        //Add text editor
        $(".compose-textarea").wysihtml5({
        toolbar: {
            "link": false, // Button to insert a link.
            "image": false, // Button to insert an image.
            
          }
        });
      });

    </script>

    <script>
        $(function () {
            /* BOOTSNIPP FULLSCREEN FIX */
            if (window.location == window.parent.location) {
                $('#back-to-bootsnipp').removeClass('hide');
            }
            
            $('[data-toggle="tooltip"]').tooltip();
            
            $('#fullscreen').on('click', function(event) {
                event.preventDefault();
                window.parent.location = "http://bootsnipp.com/iframe/4l0k2";
            });
            $('a[href="#cant-do-all-the-work-for-you"]').on('click', function(event) {
                event.preventDefault();
                $('#cant-do-all-the-work-for-you').modal('show');
            })
            
            $('[data-command="toggle-search"]').on('click', function(event) {
                event.preventDefault();
                $(this).toggleClass('hide-search');
                
                if ($(this).hasClass('hide-search')) {        
                    $('.c-search').closest('.row').slideUp(100);
                }else{   
                    $('.c-search').closest('.row').slideDown(100);
                }
            })
            
            $('#contact-list').searchable({
                searchField: '#contact-list-search',
                selector: 'li',
                childSelector: '.col-xs-12',
                show: function( elem ) {
                    elem.slideDown(100);
                },
                hide: function( elem ) {
                    elem.slideUp( 100 );
                }
            })
        });
    </script>
</body>

</html>
