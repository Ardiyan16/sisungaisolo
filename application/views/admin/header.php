
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> GIS Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <link href="<?=base_url() ?>assets/css/bootstrap.css"
              rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?=base_url()?>assets/css/vendor.css">

        <link href="<?=base_url()?>assets/css/bootstrap-table.css">
        <link rel="apple-touch-icon" href="<?=base_url()?>assets/apple-touch-icon.png">

        <link rel="stylesheet" href="<?=base_url()?>assets/css/peta.css">
        <!-- Place favicon.ico in the root directory -->

        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="<?=base_url()?>assets/css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="<?=base_url()?>assets/css/app.css">');
            }
        </script>
      
        <!-- Font Awesome Icons -->
          
        
      


    </head>

    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
                <i class="fa fa-bars"></i>
            </button> 
                    </div>

                    <div class="header-block header-block-search hidden-sm-down">
                        <h3></h3>
                    </div>
                    
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="name">
                      GIS Administrator
                    </span> </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                   
                                    
                                    <a class="dropdown-item" href="<?=base_url('auth/logout')?>"> <i class="fa fa-power-off icon"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div> GIS Admin </div>
                        </div>
                        <nav class="menu">
                            <ul class="nav metismenu" id="sidebar-menu">
                                

                                 <li style="border-top: 1px solid white;">
                                    <a href="<?=base_url('bangunan');?>"> <i class="fa fa-th-large"></i> Bangunan </a>
                                </li>

                                <li style="border-top: 1px solid white;">
                                    <a href="<?=base_url('patok_');?>"> <i class="fa fa-th-large"></i> Patok </a>
                                </li>

                                <li style="border-top: 1px solid white;">
                                    <a href="<?=base_url('inventarisasi_sungai');?>"> <i class="fa fa-th-large"></i> Inventaris Sungai</a>
                                </li>
                               
                               
                                
                            </ul>
                        </nav>
                    </div>
                    <footer class="sidebar-footer">
                        <ul class="nav metismenu" id="customize-menu">
                            <li>
                                <ul>
                                    <li class="customize">
                                        <div class="customize-item">
                                            <div class="row customize-header">
                                                <div class="col-xs-4"> </div>
                                                <div class="col-xs-4"> <label class="title">fixed</label> </div>
                                                <div class="col-xs-4"> <label class="title">static</label> </div>
                                            </div>
                                            <div class="row hidden-md-down">
                                                <div class="col-xs-4"> <label class="title">Sidebar:</label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed" >
                                            <span></span>
                                        </label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="sidebarPosition" value="">
                                            <span></span>
                                        </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Header:</label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                            <span></span>
                                        </label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="headerPosition" value="">
                                            <span></span>
                                        </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Footer:</label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                            <span></span>
                                        </label> </div>
                                                <div class="col-xs-4"> <label>
                                            <input class="radio" type="radio" name="footerPosition" value="">
                                            <span></span>
                                        </label> </div>
                                            </div>
                                        </div>
                                        <div class="customize-item">
                                            <ul class="customize-colors">
                                                <li> <span class="color-item color-red" data-theme="red"></span> </li>
                                                <li> <span class="color-item color-orange" data-theme="orange"></span> </li>
                                                <li> <span class="color-item color-green" data-theme="green"></span> </li>
                                                <li> <span class="color-item color-seagreen" data-theme="seagreen"></span> </li>
                                                <li> <span class="color-item color-blue active" data-theme=""></span> </li>
                                                <li> <span class="color-item color-purple" data-theme="purple"></span> </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                
                            </li>
                        </ul>
                    </footer>
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>