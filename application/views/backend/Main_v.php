<!DOCTYPE html>
<html class="backend">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
        <meta name="author" content="pampersdry.info">
        <meta name="description" content="Adminre is a clean and flat backend and frontend theme build with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" href="<?php echo base_url("media/files/logo.jpg"); ?>">
      <title><?php echo $title?></title>
    <!-- Favicon-->
    <!-- Google Fonts -->
          <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/foto/ecclesialogo.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/backend/image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/backend/image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/backend/image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/backend/image/touch/apple-touch-icon-57x57-precomposed.png">
      <!--/ END META SECTION -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/selectize/css/selectize.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/flot/css/flot.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheet/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheet/layout.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheet/uielement.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/javascript/vendor.js"></script>  
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheet/themes/theme4.css">  
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/plugins/modernizr/js/modernizr.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/datatables/css/datatables.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/plugins/datatables/css/tabletools.css">
            
 <script type="text/javascript">
    //set timezone
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    //buat object date berdasarkan waktu di server
    var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
    //buat object date berdasarkan waktu di client
    var clientTime = new Date();
    //hitung selisih
    var Diff = serverTime.getTime() - clientTime.getTime();    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function displayServerTime(){
        //buat object date berdasarkan waktu di client
        var clientTime = new Date();
        //buat object date dengan menghitung selisih waktu client dan server
        var time = new Date(clientTime.getTime() + Diff);
        //ambil nilai jam
        var sh = time.getHours().toString();
        //ambil nilai menit
        var sm = time.getMinutes().toString();
        //ambil nilai detik
        var ss = time.getSeconds().toString();
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>
  <body onload="setInterval('displayServerTime()', 1000); ">

        <header id="header" class="navbar">
            <div class="navbar-header">
                 <a href="<?php echo base_url("backend/kontent"); ?>"><img src="<?php echo base_url(); ?>assets/foto/CRIST.png" width="51" height="52"> <font color="white" size="3"> &nbsp;<strong>Ecclesia Administrator</strong></font></a>
            </div>
            <div class="navbar-toolbar clearfix">
                 <ul class="nav navbar-nav navbar-left">
                    <li class="hidden-xs hidden-sm">
                        <a href="javascript:void(0);" class="sidebar-minimize" data-toggle="minimize" title="Minimize sidebar">
                            <span class="meta">
                                <span class="icon"></span>
                            </span>
                        </a>
                    </li>
                    <li class="navbar-main hidden-lg hidden-md hidden-sm">
                        <a href="javascript:void(0);" data-toggle="sidebar" data-direction="ltr" rel="tooltip" title="Menu sidebar">
                            <span class="meta">
                                <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                            </span>
                        </a>
                    </li>
                        
                        <script class="mustache-template" type="x-tmpl-mustache">
                        
                            {{#data}}
                            <a href="javascript:void(0);" class="media border-dotted new">
                                <span class="media-object pull-left">
                                    <i class="{{icon}}"></i>
                                </span>
                                <span class="media-body">
                                    <span class="media-text">{{{text}}}</span>
                                    <span class="media-meta pull-right">{{meta.time}}</span>
                                </span>
                            </a>
                            {{/data}}
                        
                        </script>
                       
                                </div>
                            </div>
                        </div>
                    </li>  
                    </li>
                </ul>
            </div>
        </header>
        <!--/ END Template Header -->

        <!-- START Template Sidebar (Left) -->
        <aside class="sidebar sidebar-left sidebar-menu">
            <!-- START Sidebar Content -->
             <section class="content slimscroll">
                <h5 class="heading">Main Menu</h5>
                <ul class="topmenu topmenu-responsive" data-toggle="menu">
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
            </section>
        </aside>
        <footer id="footer">
            <!-- START container-fluid -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- copyright -->
                        <p class="nm text-muted">&copy; Copyright <?php echo date('Y'); ?> by <a href="javascript:void(0);" class="semibold"> Ecclesia Foundation</a>. All Rights Reserved.</p>
                        <!--/ copyright -->
                    </div>
                    <!-- <div class="col-sm-6 text-right hidden-xs">
                        <a href="javascript:void(0);" class="semibold">Privacy Policy</a>
                        <span class="ml5 mr5">&#8226;</span>
                        <a href="javascript:void(0);" class="semibold">Terms of Service</a>
                    </div> -->
                </div>
            </div>
            <!--/ END container-fluid -->
        </footer>
        <!-- START Template Main -->
        <section id="main" role="main">
            <div class="container-fluid">
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold"><?php echo $title; ?></h4>
                    </div>
                    <div class="page-header-section">
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                                <li ><?php echo $title; ?></li>
                            </ol>
                        </div>
                    </div>
                </div> 
            <?php $this->load->view($main);?>
            </div> 
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
        </section>
        <!--/ END Template Main -->

      <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/javascript/core.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/javascript/backend/app.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/plugins/prettify/js/prettify.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/javascript/backend/components/typography.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/javascript/backend/tables/default.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/plugins/datatables/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/plugins/datatables/tabletools/js/dataTables.tableTools.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/plugins/datatables/js/datatables-bs3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/javascript/backend/tables/datatable.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/plugins/selectize/js/selectize.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/plugins/flot/js/jquery.flot.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/plugins/flot/js/jquery.flot.resize.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/plugins/flot/js/jquery.flot.categories.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/plugins/flot/js/jquery.flot.time.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/plugins/flot/js/jquery.flot.tooltip.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/plugins/flot/js/jquery.flot.spline.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/javascript/backend/tables/default.js"></script>
        <script src="<?php echo base_url();?>assets/theme/js/highcharts.js"></script>
        <script src="<?php echo base_url();?>assets/theme/js/exporting.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/plugins/prettify/js/prettify.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/backend/javascript/backend/components/typography.js"></script>
    </body>
</html>
