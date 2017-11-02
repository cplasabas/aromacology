<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aromacology </title>

        <link rel="icon" type="image/png" href="images/favicons/Aromacology-16x16.png" sizes="16x16">  
        <link rel="icon" type="image/png" href="images/favicons/Aromacology-32x32.png" sizes="32x32">  
        <link rel="icon" type="image/png" href="images/favicons/Aromacology-96x96.png" sizes="96x96">  

        <!-- Font Awesome -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">

        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <!-- Custom Theme Style -->
        <link href="css/custom.min.css" rel="stylesheet">

<?php
        session_start();
        require_once 'config.php';
        ?>
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0; margin: 15% 0 20% 0;">
                            <a href="home.php" >  <img class="img-responsive" style="margin:0 auto; width:50%;" src="images/aromacology-transparent.png" alt="aromacology"> </a>
                        </div>

                        <div class="clearfix"></div>

                        <br/>

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">

                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-newspaper-o"></i> Pages <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="home-page.php"><i class="fa fa-home"></i> Home</a></li>
                                            <li><a href="beauty-page.php"><i class="fa fa-paint-brush"></i> Beauty</a></li>
                                            <li><a href="wellness-page.php"><i class="fa fa-heart"></i> Wellness</a></li>
                                            <li><a href="opportunity-page.php"><i class="fa fa-bank"></i> Opportunity</a></li>
                                            <li><a href="lifestyle-page.php"><i class="fa fa-bicycle"></i> Lifestyle</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-shopping-bag"></i> Store <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="orders.php"><i class="fa fa-dropbox"></i> Orders</a></li>
                                            <li><a href="products.php"><i class="fa fa-product-hunt"></i> Products</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-pencil-square-o"></i> Blog <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="new-post.php"><i class="fa fa-pencil-square-o"></i> New Post</a></li>
                                            <li><a href="post-list.php"><i class="fa fa-list"></i> Post List</a></li>
                                        </ul>
                                    </li>
                                    
                                        <li><a href="contact.php"><i class="fa fa-phone"></i> Contact</a>
                                    <li><a><i class="fa fa-table"></i> Reports <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="web-traffic.php">Web Traffic</a></li>
                                            <li><a href="user-traffic.php">User Traffic</a></li>
                                            <li><a href="blog-report.php">Blog </a></li>
                                            <li><a href="store-report.php">Store </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->

                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-gear"></i> 
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="users.php">Users</a></li>
                                        <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">

                    <div class="page-title text-center ">

                        <h1>User Traffic</h1>


                    </div>

                    <div class="clearfix"></div>

                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Aromacology - 2017
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <script src="js/custom.min.js"></script>
        <script src="bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>

    </body>
</html>
