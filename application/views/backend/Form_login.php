<!DOCTYPE html>
<!-- 
TEMPLATE NAME : Adminre - backend
VERSION : 1.3.0
AUTHOR : JohnPozy
AUTHOR URL : http://themeforest.net/user/JohnPozy
EMAIL : pampersdry@gmail.com
LAST UPDATE: 2015/01/05

** A license must be purchased in order to legally use this template for your project **
** PLEASE SUPPORT ME. YOUR SUPPORT ENSURE THE CONTINUITY OF THIS PROJECT **
-->
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecclesia - backend</title>
        <meta name="author" content="pampersdry.info">
        <meta name="description" content="Adminre is a clean and flat backend and frontend theme build with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/backend/image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/backend/image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/backend/image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/backend/image/touch/apple-touch-icon-57x57-precomposed.png">
      <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/foto/ecclesialogo.jpg">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheet/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheet/layout.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheet/uielement.css">
        <!--/ Application stylesheet -->

        <!-- Theme stylesheet : optional -->
        <!--/ Theme stylesheet : optional -->

        <!-- modernizr script -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/plugins/modernizr/js/modernizr.js"></script>
        <!--/ modernizr script -->
        <!-- END STYLESHEETS -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body background="<?php echo base_url(); ?>assets/foto/background.jpg">
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <section class="container">
                <!-- START row -->
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <!-- Brand -->
                        <div class="text-center" style="margin-bottom:40px;">
<!--                             <span class="logo-figure inverse"></span>
                            <span class="logo"></span>
                            <h5 class="semibold text-muted mt-5">Administrator Area.</h5>
 -->                        </div>
                        <!--/ Brand -->

                        <!-- Social button -->
                      
                        <!-- Social button -->

                        <hr><!-- horizontal line -->

                        <!-- Login form --><center><font size="4" color="red"><img src="<?php echo base_url(); ?>assets/foto/CRIST.png" width="90" height="50">PANTI ASUHAN ECCLESIA</font></center>
                    </br>
                        <form class="panel" name="form-login" action="<?php echo base_url();?>index.php/backend/login/login_form" method="post" class="form-horizontal">
                            <div class="panel-body">
                                <!-- Alert message -->
                                <!-- <div class="alert alert-danger">
                                    <span class="semibold">Note :</span>&nbsp;&nbsp;Ip anda terdaftar ,jangan coba-coba masuk jika anda tidak berwewenang dengan program ini.
                                </div> -->
                                <!--/ Alert message -->
                               
                                <div class="form-group"><?php echo $this->session->flashdata('message');?></strong></span>
                                    <div class="form-stack has-icon pull-left"><?php echo form_error('username');?>
                                        <input name="username" type="text" class="form-control input-lg" placeholder="Username " data-parsley-errors-container="#error-container" data-parsley-error-message="Silahkan masukkan username" data-parsley-required value="<?php echo set_value('username');?>">
                                        <i class="ico-user2 form-control-icon"></i>
                                    </div>
                                    <div class="form-stack has-icon pull-left"><?php echo form_error('password');?>
                                        <input name="password" type="password" class="form-control input-lg" placeholder="Password" data-parsley-errors-container="#error-container" data-parsley-error-message="Silahkan isi password anda" data-parsley-required value="<?php echo set_value('password');?>">
                                        <i class="ico-lock2 form-control-icon"></i>
                                    </div>
                                </div>

                                <!-- Error container -->
                                <div id="error-container" class="mb15"> <span><strong></div>
                                <!--/ Error container -->

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox custom-checkbox">  
                                                <input type="checkbox" name="remember" id="remember" value="1">  
                                                <label for="remember">&nbsp;&nbsp;Ingat saya</label>   
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group nm">
                                    <button type="submit" class="btn btn-block btn-danger"><span class="semibold">Masuk</span></button>
                                </div>
                            </div>
                        </form>
                        <!-- Login form -->

                        </div>
                </div>
                <!--/ END row -->
            </section>
            <!--/ END Template Container -->
        </section>
        <!--/ END Template Main -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/javascript/vendor.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/javascript/core.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/javascript/backend/app.js"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/plugins/parsley/js/parsley.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/javascript/backend/pages/login.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>