<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js"> <!--<![endif]-->
    <head>

    <title>PANTI ASUHAN ECCLESIA</title>

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/foto/ecclesialogo.jpg">
        <!-- stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>tema/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>tema/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>tema/assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>tema/assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>tema/assets/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>tema/assets/css/style.css">


        <!-- scripts -->
        <script type="text/javascript" src="<?php echo base_url(); ?>tema/assets/js/modernizr.custom.97074.js"></script>

    </head>

    <body>

        <div id="home-page">

            <!-- site-navigation start -->  
            <nav id="mainNavigation" class="navbar navbar-dafault main-navigation" role="navigation">
                <div class="container">
                    
                    <div class="navbar-header">
                        
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <!-- navbar logo -->
                         <div class="navbar-brand">
                            <span class="sr-only"><img src="<?php echo base_url(); ?>assets/foto/panti-asuhan-perlu-akreditasi.jpg" width="90" height="50">ECCLESIA</span>
                           <a href="<?php echo base_url(); ?>"><strong><font color="gray"> <img src="<?php echo base_url(); ?>assets/foto/panti-asuhan-perlu-akreditasi.jpg" width="90" height="50">ECCLESIA</font></strong></a>
                          <!--   <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url(); ?>tema/assets/img/main_logo.png" class="img-responsive center-block" alt="logo">
                            </a> -->
                        </div>
                        <!-- navbar logo -->

                    </div><!-- /.navbar-header -->

                    <!-- nav links -->
                  <div class="collapse navbar-collapse" id="main-nav-collapse">
                        <ul class="nav navbar-nav navbar-right text-uppercase">
                            <li>
                                <a class="btn btn-info" href="<?php echo base_url(); ?>"><span><font color="white"><strong>Home</font></strong></span></a>
                            </li>

                          
                            <li>
                                <a class="btn btn-default" href="<?php echo base_url('profil'); ?>"><span>Profil</span></a>
                            </li>
                             <li class="dropdown">
                                <a class="btn btn-default" href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Tentang Kami</span></a>
                                <ul class="dropdown-menu">
                                   <?php foreach($category_catalog as $category_catalog){ ?>   
                                    <li>
                                        <a class="btn btn-default" href="<?php echo base_url(); ?>tentang/detail/<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $category_catalog['id_category']).'-'.$category_catalog['category'])); ?>"><?php echo $category_catalog["category"]; ?></a>
                                    </li>
                                    <?php } ?>
                                </ul>  <!-- end of /.dropdown-menu -->
                            </li><li>
                                <a class="btn btn-default" href="<?php echo base_url('article'); ?>"><span>Berita</span></a>
                            </li>
                            <li>
                                <a class="btn btn-default" href="<?php echo base_url('faq'); ?>"><span>Kontak Kami</span></a>
                            </li>
                        </ul>
                    </div><!-- nav links -->
                    
                </div><!-- /.container -->
            </nav>
            <!-- site-navigation end -->


            <!-- header start -->
            <header id="header" class="header-wrapper home-parallax home-fade">
                <div class="header-overlay"></div>
                <div class="header-wrapper-inner">
                    <div class="container">

                           <div class="welcome-speech">
                            <h1><font color="white">Selamat Datang Di Panti Asuhan Ecclesia Sumatera Utara - Medan</font></h1>
                            <p><font color="yellow">Mari melihat kami lebih dalam...</font></p>
                            <a class="btn btn-danger" href="<?php echo base_url('profil'); ?>" class="btn btn-white">
                               Read more
                            </a>
                        </div><!-- /.intro -->
                        
                    </div><!-- /.container -->

                </div><!-- /.header-wrapper-inner -->
            </header>
            <!-- /#header -->

            <div class="main-content">

                <!--  begin intro section -->

                <section class="intro bg-light-gray">
                    <div class="container">
                        <div class="row">
                               <?php $this->load->view($main_template); ?>
                    </div> <!-- end of .container -->
                </section> 
                <!--  end of testimonial  section -->
                            
            </div> <!-- end of /.main-content -->

            <footer>
                <div class="container">
                    <div class="row">

                        <!-- useful links -->
                        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                            <h4>Useful Links</h4>
                            <ul class="row footer-links">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <li><a href="https://www.facebook.com/samuel.sitanggang.7587" class="btn btn-info" target="_blank"><font color="white">Facebook Pengurus</font></a></li>
                                      <li><a href="https://www.facebook.com/pdtssitanggang.sth" class="btn btn-success" target="_blank"><font color="white">Facebook Yayasan</font></a></li>
                                    <li><a href="https://www.instagram.com/panti_asuhan_ecclesia" class="btn btn-danger" target="_blank"><font color="white">Instagram</font></a></li>
                                </div>
                            </ul>
                        </div>

                        <!-- recent news -->
                        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                            <h4>Recent News</h4>
                           <?php foreach($article_recent as $recent){ ?>
                            <div class="row footer-news">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $recent["foto"]; ?>" onError="this.onerror=null;this.src='<?php echo base_url();?>assets/foto/alkitab.jpg';" class="img-responsive center-block" alt="<?php echo $recent["title"]; ?>">
                                </div>
                                <div class="col-md-8 col-sm-4 col-xs-6">
                                    <div class="row">
                                        <p class="text-capitalize">
                                            <a href="<?php echo base_url(); ?>article/detail/<?php echo strtolower(str_replace(' ','-',preg_replace("/[^a-zA-Z0-9\s]/", "", $recent['id_article']).'-'.$recent['title'])); ?>">
                                                <?php echo $recent["title"]; ?>
                                            </a>
                                        </p>
                                        <p class="news-date"><?php echo $recent["date_post"]; ?></p>
                                    </div>
                                </div>
                            </div> <!-- /.footer-news -->
                            <?php } ?>
                            <!-- /.footer-news -->
                        </div> <!-- /.footer-widget -->

                        <!-- news-letter -->
                       <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                            <h4>Recent Comment</h4>

                            <p>Komentar Pengunjung</p>
                           <?php foreach($faq as $faq){  ?>  <div class="input-group margin-bottom-sm">
                                   <i class="fa fa-user fa-fw"></i> 
                                
                                 <?php echo $faq["name"]; ?> on<span class="input-group-addon">
                                  <?php echo $faq["date_sent"]; ?>
                                </span>
                               
                            </div> <?php } ?>
                            <p><font color="white"><i><code>Email tidak akan ditampilkan</code></i></font></p>
                        </div> <!-- /.footer-widget -->

                        <!-- about avada agency -->
                        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                            <h4> Join Us On Facebook</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="fb-root"></div>
              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script><div class="fb-page" data-href="https://www.facebook.com/Panti-Asuhan-Ecclesia-382804748843528/" data-width="700" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div><!-- /.footer-share-button -->
                                </div>
                            </div>
                        </div> <!-- /.footer-widget -->

                    </div>
                </div>
            </footer>


            <!-- footer-navigation start -->  
            <nav class="hidden-xs hidden-sm navbar footer-nav" role="navigation">
                <div class="container">
                    
                    <div class="navbar-header">
                        
                        <!-- navbar logo -->
                        <div class="navbar-brand">
                            <span class="sr-only">&copy;Panti Asuhan Ecclesia</span>
                            <a href="<?php echo base_url(); ?>">
                                &copy;Panti Asuhan Ecclesia
                            </a>
                        </div>
                        <!-- navbar logo -->

                    </div><!-- /.navbar-header -->

                    <!-- nav links -->
                    <div class="collapse navbar-collapse" id="main-nav-collapse">
                        <ul class="nav navbar-nav navbar-right text-capitalize">
                            <li><a href="https://themewagon.com" target="_blank">
                                <span>big thanks to THEMEWAGON team</span>
                            </a></li>
                        </ul>
                    </div><!-- nav links -->
                    
                </div><!-- /.container -->
            </nav>
            <!-- footer-navigation end -->
            
        </div> <!-- end of /#home-page -->

        <!--  Necessary scripts  -->

        <script type="text/javascript" src="<?php echo base_url(); ?>tema/assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>tema/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>tema/assets/js/owl.carousel.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>tema/assets/js/jquery.hoverdir.js"></script>


        <!-- script for portfolio section using hoverdirection -->
        <script type="text/javascript">
            $(function() {

                $('.portfolio-item > .item-image').each( function() { $(this).hoverdir({
                    hoverDelay : 75
                }); } );

            });
        </script>


        <!-- script for twitter-feed using owl carousel-->
        <script type="text/javascript">
            $(document).ready(function() {
 
                $("#twit").owlCarousel({
                 
                    navigation : true, // Show next and prev buttons
                    slideSpeed : 100,
                    paginationSpeed : 400,
                    navigationText : false,
                    singleItem: true,
                    autoPlay: true,
                    pagination: false
                });
 
            });
        </script>


        <!-- script for testimonial section using owl carousel -->
        <script type="text/javascript">
            $(document).ready(function() {
 
                $("#client-speech").owlCarousel({
                 
                    autoPlay: 5000, //Set AutoPlay to 3 seconds
                    stopOnHover: true,
                    singleItem:true
                });
 
            });
        </script>


    </body>
</html>