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
                    <?php
                    if (isset($_POST['save_contact'])) {
                        $p1 = $_POST['p1'];
                        $p2 = $_POST['p2'];
                        $em = $_POST['em'];

                        $_em = mysqli_real_escape_string($mysql, $em);



                        $p1_query = "update contact set contact_details = '$p1' where contact_name = 'phone_1'";

                        mysqli_query($mysql, $p1_query)
                                or die(mysqli_error($mysql));

                        $p2_query = "update contact set contact_details = '$p2' where contact_name = 'phone_2'";

                        mysqli_query($mysql, $p2_query)
                                or die(mysqli_error($mysql));

                        $em_query = "update contact set contact_details = '$_em' where contact_name = 'email'";


                        mysqli_query($mysql, $em_query)
                                or die(mysqli_error($mysql));
                    } else if (isset($_POST['save_social'])) {
                        $fb = $_POST['fb'];
                        $tw = $_POST['tw'];
                        $insta = $_POST['insta'];


                        $fb_query = "update contact set contact_details = '$fb' where contact_name = 'facebook'";

                        mysqli_query($mysql, $fb_query)
                                or die(mysqli_error($mysql));

                        $tw_query = "update contact set contact_details = '$tw' where contact_name = 'twitter'";

                        mysqli_query($mysql, $tw_query)
                                or die(mysqli_error($mysql));

                        $insta_query = "update contact set contact_details = '$fb' where contact_name = 'instagram'";

                        mysqli_query($mysql, $insta_query)
                                or die(mysqli_error($mysql));
                    }
                    ?>




                    <div class="page-title text-center ">

                        <h1>Contact</h1>
                    </div>

                    <div class="clearfix"></div>    


                    <?php
                    $contact = [];


                    $q_contact = "select contact_details from contact";

                    $result_contact = $mysql->query($q_contact);
                    if ($result_contact->num_rows > 0) {

                        while ($row = $result_contact->fetch_assoc()) {
                            array_push($contact, $row['contact_details']);
                        }
                    }
                    ?>


                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Contact Information</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />


                                    <h3>Contact</h3>

                                    <form  data-parsley-validate class="form-horizontal form-label-left col-lg-offset-2 "  method="POST" action="contact.php"  >

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone 1</label>
                                            <div class="col-md-5 col-sm-5  col-xs-12">
                                                <input type="number" id="last-name" name="p1" required="required" value="<?php echo $contact[3]; ?>"class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone 2</label>
                                            <div class="col-md-5 col-sm-5  col-xs-12">
                                                <input type="number" id="last-name" name="p2" required="required" value="<?php echo $contact[4]; ?>" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email</label>
                                            <div class="col-md-5 col-sm-5  col-xs-12">
                                                <input type="email" id="last-name" name="em" required="required" value="<?php echo $contact[5]; ?>" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12 pull-right">
                                                <button class="btn btn-primary" type="reset">Reset</button>
                                                <button type="submit" class="btn btn-default" name="save_contact">Save</button>
                                            </div>
                                        </div>

                                    </form>
                                    <br><br>

                                    <div class="ln_solid"></div>

                                    <h3>Social</h3>

                                    <form  data-parsley-validate class="form-horizontal form-label-left col-lg-offset-2 "  method="POST" action="contact.php"  >

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Facebook</label>
                                            <div class="col-md-5 col-sm-5  col-xs-12">
                                                <input type="url" id="last-name" name="fb" required="required" value="<?php echo $contact[0]; ?>"class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Twitter</label>
                                            <div class="col-md-5 col-sm-5  col-xs-12">
                                                <input type="url" id="last-name" name="tw" required="required" value="<?php echo $contact[1]; ?>" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Instagram</label>
                                            <div class="col-md-5 col-sm-5  col-xs-12">
                                                <input type="url" id="last-name" name="insta" required="required" value="<?php echo $contact[2]; ?>" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12 pull-right">
                                                <button class="btn btn-primary" type="reset">Reset</button>
                                                <button type="submit" class="btn btn-default" name="save_social">Save</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
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
