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


                <?php
                if (isset($_POST['save_f'])) {
                    $f_image = $_FILES['f_image']['name'];
                    $f_body = $_POST['f_body'];
                    
                       $_f_body = mysqli_real_escape_string($mysql, $f_body);

                    $add_query = "update pages set page_body = '$_f_body', page_image  = '$f_image' where page_name = 'food'";

                    mysqli_query($mysql, $add_query)
                            or die(mysqli_error($mysql));


                    $target_dir = "../images/uploads/";
                    $target_file = $target_dir . basename($_FILES["f_image"]["name"]);

                    move_uploaded_file($_FILES["f_image"]["tmp_name"], $target_file);
                } else if (isset($_POST['save_a'])) {
                    $a_image = $_FILES['a_image']['name'];
                    $a_body = $_POST['a_body'];
                    
                       $_a_body = mysqli_real_escape_string($mysql, $a_body);

                    $add_query = "update pages set page_body = '$_a_body', page_image  = '$a_image' where page_name = 'aromatherapy'";

                    mysqli_query($mysql, $add_query)
                            or die(mysqli_error($mysql));


                    $target_dir = "../images/uploads/";
                    $target_file = $target_dir . basename($_FILES["a_image"]["name"]);

                    move_uploaded_file($_FILES["a_image"]["tmp_name"], $target_file);
                }
                ?>

                <!-- page content -->
                <div class="right_col" role="main">

                    <div class="page-title text-center ">

                        <h1>Wellness Page</h1>

                    </div>

                    <div class="clearfix"></div>

                    <!-- Food -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Food</h2>
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
                                    <form  data-parsley-validate class="form-horizontal form-label-left "  method="POST" action="wellness-page.php" id="f_form" enctype="multipart/form-data" >

                                        <div class="form-group ">
                                            <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">Post Image <span class="required">*</span></label>
                                            <div class="col-md-3 col-sm-3 col-xs-12 ">
                                                <div class="input-group">
                                                    <label class="input-group-btn">
                                                        <span class="btn btn-default">
                                                            Browse <input type="file" style="display: none;" required="required"  name="f_image">
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control" required="required" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            $(function () {

                                                $(document).on('change', ':file', function () {
                                                    var input = $(this),
                                                            numFiles = input.get(0).files ? input.get(0).files.length : 1,
                                                            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                                                    input.trigger('fileselect', [numFiles, label]);
                                                });

                                                $(document).ready(function () {
                                                    $(':file').on('fileselect', function (event, numFiles, label) {

                                                        var input = $(this).parents('.input-group').find(':text'),
                                                                log = numFiles > 1 ? numFiles + ' files selected' : label;

                                                        if (input.length) {
                                                            input.val(log);
                                                        } else {
                                                            if (log)
                                                                alert(log);
                                                        }

                                                    });
                                                });

                                            });


                                        </script>

                                        <div class="form-group">
                                            <div class="col-md-8 col-sm-8  col-xs-12 col-md-offset-1 col-sm-offset-1">

                                                <?php
                                                $page_body = "";
                                                $sql_page = "select page_body from pages where page_name = 'food'";

                                                $result_page = $mysql->query($sql_page);

                                                if ($result_page->num_rows > 0) {
                                                    while ($row = $result_page->fetch_assoc()) {

                                                        $page_body = $row['page_body'];
                                                    }
                                                }
                                                ?>


                                                <div id="editor-two" name="editor-data" class="editor-wrapper"><?php echo $page_body; ?></div>

                                                <textarea name="f_body" id="f_body" style="display:none;" ></textarea>

                                                <script>

                                                    $("#f_form").submit(function (e) {

                                                        var data = document.getElementById('editor-two').innerHTML;
                                                        var textarea = document.getElementById('f_body');

                                                        textarea.value = data;
                                                    });

                                                </script>

                                            </div>
                                        </div>


                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12 pull-right">

                                                <button type="submit" class="btn btn-default" name="save_f">Save</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!-- Hair Care -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Aromatherapy</h2>
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
                                    <form  data-parsley-validate class="form-horizontal form-label-left "  method="POST" action="wellness-page.php" id="a_form" enctype="multipart/form-data" >

                                        <div class="form-group ">
                                            <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">Post Image <span class="required">*</span></label>
                                            <div class="col-md-3 col-sm-3 col-xs-12 ">
                                                <div class="input-group">
                                                    <label class="input-group-btn">
                                                        <span class="btn btn-default">
                                                            Browse <input type="file" style="display: none;"  required="required" name="a_image">
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control" required="required" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            $(function () {

                                                $(document).on('change', ':file', function () {
                                                    var input = $(this),
                                                            numFiles = input.get(0).files ? input.get(0).files.length : 1,
                                                            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                                                    input.trigger('fileselect', [numFiles, label]);
                                                });

                                                $(document).ready(function () {
                                                    $(':file').on('fileselect', function (event, numFiles, label) {

                                                        var input = $(this).parents('.input-group').find(':text'),
                                                                log = numFiles > 1 ? numFiles + ' files selected' : label;

                                                        if (input.length) {
                                                            input.val(log);
                                                        } else {
                                                            if (log)
                                                                alert(log);
                                                        }

                                                    });
                                                });

                                            });


                                        </script>

                                        <div class="form-group">
                                            <div class="col-md-8 col-sm-8  col-xs-12 col-md-offset-1 col-sm-offset-1">

                                                <?php
                                                $page_body = "";
                                                $sql_page = "select page_body from pages where page_name = 'aromatherapy'";

                                                $result_page = $mysql->query($sql_page);

                                                if ($result_page->num_rows > 0) {
                                                    while ($row = $result_page->fetch_assoc()) {

                                                        $page_body = $row['page_body'];
                                                    }
                                                }
                                                ?>


                                                <div id="editor-one" name="editor-data" class="editor-wrapper"><?php echo $page_body; ?></div>

                                                <textarea name="a_body" id="a_body" style="display:none;" ></textarea>

                                                <script>

                                                    $("#a_form").submit(function (e) {

                                                        var data = document.getElementById('editor-one').innerHTML;
                                                        var textarea = document.getElementById('a_body');

                                                        textarea.value = data;
                                                    });

                                                </script>

                                            </div>
                                        </div>


                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12 pull-right">

                                                <button type="submit" class="btn btn-default" name="save_a">Save</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>





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
        <script src="jquery.hotkeys/jquery.hotkeys.js"></script>
        <script src="google-code-prettify/src/prettify.js"></script>
        <script src="switchery/dist/switchery.min.js"></script>
    </body>
</html>
