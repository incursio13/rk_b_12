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
    <link rel="stylesheet" href="../backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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
                    <h2>Hasil Pencarian Barang Hilang</h2>
                    <hr class="star-primary">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/laptop.jpg" class="img-responsive" alt="Slice of cake" style="height:250px">
                    </a>
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
