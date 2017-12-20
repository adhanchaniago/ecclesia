<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $title?></title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/foto/amiklogo.png" type="image/x-icon">
    <!-- Google Fonts -->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
  <!--   <link href='<?php base_url(); ?>temp/source/font.css' rel='stylesheet' type='text/css'>
   <link href='<?php base_url(); ?>temp/source/material.css' rel='stylesheet' type='text/css'> -->
    <link href="<?php echo base_url(); ?>temp/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>temp/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>temp/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>temp/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>temp/plugins/dropzone/dropzone.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>temp/plugins/multi-select/css/multi-select.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>temp/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>temp/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>temp/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
     <link href="<?php echo base_url(); ?>temp/plugins/morrisjs/morris.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>temp/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>temp/plugins/morrisjs/morris.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>temp/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>temp/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>temp/css/themes/all-themes.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>temp/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>temp/plugins/waitme/waitMe.css" rel="stylesheet" />
    <script src="<?php echo base_url(); ?>temp/plugins/jquery/jquery.min.js"></script>
    <style>
      *{
      padding: 0;margin: 0;
      }
      a{
      text-decoration: none;
      color: #333;
      }
      body{
      font-family: 'verdana', verdana;
      }
      iframe{
      margin: 20px 0;
      }
      h1{
      }
      h2{
      p{
      margin:10px 0;
      }
      #loading {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url(<?php echo base_url('assets/loader/loading.gif'); ?>) 50% 50% no-repeat #fff;
      }
      .container{
      width: 730px;
      margin: 0 auto;
      padding: 20px;
      background: #fff;
      }
      header{
       
      }
      .content img{
      width: 240px;
      height: 200px;
      }
      </style> 
         <script type="text/javascript">
        $(window).load(function() { $("#loading").fadeOut("slow"); })
    </script>
   <script language=JavaScript>
    var message = "Maaf ,semua sumber di aplikasi ini dilindungi.";
 function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }
    if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }
    document.onmousedown = rtclickcheck;
</script> 
 
</head>
<body class="theme-red">
  
   <!-- Page Loader -->
  <!--  <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Silahkan Tunggu...</p>
        </div>
    </div>  -->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a href="<?php echo base_url("backend"); ?>"> <img src="<?php echo base_url(); ?>assets/foto/CRIST.png" width="50" height="50"> <font color="white" size="4"> <strong>Ecclesia Administrator</strong></font></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $pengguna->foto; ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><font color="black"><strong><?php echo $pengguna->nama; ?></strong></font></div>
                    <div class="level"><font color="black"><strong>Status Login : 
                  <?php if($pengguna->level_login == 1)
                  {
                  echo "Administrator";
                  }
                   ?>
                    </strong>
                  </font></div>
                </div>
            </div>
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                      <li  class="active open">
                        <a href="<?php echo base_url('backend/kontent'); ?>" data-target="#dashboard" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-dashboard2"></i></span>
                            <span class="text">Dashboard</span>
                            
                        </a>
                        <!-- START 2nd Level Menu -->
                     
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li>
                        <a href="<?php echo base_url('backend/profil'); ?>" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-screwdriver"></i></span>
                            <span class="text">Profil</span>
                        </a>
                        <!-- START 2nd Level Menu -->
                       
                        <!--/ END 2nd Level Menu -->
                    </li>
                      <li>
                        <a href="<?php echo base_url('backend/category'); ?>" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-quill2"></i></span>
                            <span class="text">Category</span>
                        </a>
                        <!-- START 2nd Level Menu -->
                       
                        <!--/ END 2nd Level Menu -->
                    </li>
                      <li>
                        <a href="<?php echo base_url('backend/catalog'); ?>" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-grid"></i></span>
                            <span class="text">Category Description</span>
                        </a>
                        <!-- START 2nd Level Menu -->
                       
                        <!--/ END 2nd Level Menu -->
                    </li>
                      <li>
                        <a href="<?php echo base_url('backend/article'); ?>" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-pencil"></i></span>
                            <span class="text">Article</span>
                        </a>
                        <!-- START 2nd Level Menu -->
                       
                        <!--/ END 2nd Level Menu -->
                    </li>
                       <li>
                        <a href="<?php echo base_url('backend/khotbah'); ?>" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-book"></i></span>
                            <span class="text">Khotbah</span>
                        </a>
                        <!-- START 2nd Level Menu -->
                       
                        <!--/ END 2nd Level Menu -->
                    </li>
                        <li>
                         <a href="<?php echo base_url('backend/faq'); ?>" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-book"></i></span>
                            <span class="text">Faq</span>
                        </a> <li>
                        <a href="<?php echo base_url('backend/webmaster'); ?>" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-user"></i></span>
                            <span class="text">User</span>
                        </a>
                        <!-- START 2nd Level Menu -->
                       
                        <!--/ END 2nd Level Menu -->
                    </li><li>
                        <a href="<?php echo base_url('backend/login/logout'); ?>" onClick="return confirm('Akhiri Session ?');" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-off"></i></span>
                            <span class="text">Logout</span>
                        </a>
                        <!-- START 2nd Level Menu -->
                       
                        <!--/ END 2nd Level Menu -->
                    </li>
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <?php echo date('Y'); ?> <a href="javascript:void(0);">ECCLESIA</a>.
                </div>
                <div class="version"> <span  class="footer-right">Halaman ini dimuat selama <strong>{elapsed_time}</strong> detik.</br>
                  <b> Engine  </b> <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?> </span>
                  
                </div>
            </div>
            <!-- #Footer -->
        </aside>
    </section>

    <section class="content">         
     <?php $this->load->view($main);?>
    
    </section>
    <script src="<?php echo base_url(); ?>temp/plugins/autosize/autosize.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/momentjs/moment.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="<?php echo base_url(); ?>temp/js/pages/forms/basic-form-elements.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/dropzone/dropzone.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/multi-select/js/jquery.multi-select.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/jquery-spinner/js/jquery.spinner.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/nouislider/nouislider.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/node-waves/waves.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>temp/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>temp/js/pages/forms/advanced-form-elements.js"></script>
    <script src="<?php echo base_url(); ?>temp/js/pages/tables/jquery-datatable.js"></script>
    <script src="<?php echo base_url(); ?>temp/js/demo.js"></script>


    <script src="<?php echo base_url(); ?>temp/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>temp/plugins/morrisjs/morris.js"></script>
    <script src="<?php echo base_url(); ?>temp/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>temp/js/pages/charts/morris.js"></script>
</body>

</html>