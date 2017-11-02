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
                if (isset($_POST['add'])) {
                    $slider_image = $_FILES['slider_image']['name'];
                    $slider_name = $_POST['slider_name'];
                    $slider_link = $_POST['slider_link'];


                    $add_query = "insert into main_slider(slider_image,slider_name,slider_link) values('$slider_image','$slider_name','$slider_link')";

                    mysqli_query($mysql, $add_query)
                            or die(mysqli_error($mysql));

                    $target_dir = "../images/uploads/";
                    $target_file = $target_dir . basename($_FILES["slider_image"]["name"]);

                    move_uploaded_file($_FILES["slider_image"]["tmp_name"], $target_file);

                    echo "Slider Added!";
                }

                if (isset($_POST['select-product-1'])) {
                    $main_product_id = $_POST['product_1_id'];

                    $save_query = "update main_products set product_id = $main_product_id  where main_product_id = 1";

                    mysqli_query($mysql, $save_query)
                            or die(mysqli_error($mysql));
                }

                if (isset($_POST['select-product-2'])) {
                    $main_product_id = $_POST['product_2_id'];

                    $save_query = "update main_products set product_id = $main_product_id  where main_product_id = 2";

                    mysqli_query($mysql, $save_query)
                            or die(mysqli_error($mysql));
                }
                ?>

                <!-- page content -->
                <div class="right_col" role="main">

                    <div class="page-title text-center ">

                        <h1>Home Page</h1>

                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Slider Images</h2>
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

                                    <div class="row">

                                        <?php
                                        $sql_slider = "select slider_id, slider_image,slider_name from main_slider;";

                                        $result_slider = $mysql->query($sql_slider);

                                        if ($result_slider->num_rows > 0) {
                                            while ($row = $result_slider->fetch_assoc()) {


                                                $slider_id = $row['slider_id'];
                                                $slider_image = $row['slider_image'];
                                                $slider_name = $row['slider_name'];
                                                ?>

                                                <div class="col-md-55">
                                                    <div class="thumbnail">
                                                        <div class="image view view-first">
                                                            <img style="width: 100%; display: block;" src="../images/uploads/<?php echo $slider_image ?>" alt="image" />
                                                            <div class="mask">
                                                                <p class="slider-text"><?php echo $slider_name ?></p>
                                                                <div class="tools tools-bottom">

                                                                    <a href="#" id="delete-slider-btn"   data-id="<?php echo $slider_id ?>"   data-toggle="modal" data-target=".delete-slider-modal"><i class="fa fa-times"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php
                                            }
                                        }
                                        ?>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <script>

                        $('a#delete-slider-btn').click(function () {
                            var id = $(this).data('id');
                            $(".modal-footer #id").val(id);
                        })


                    </script>


                    <div class="modal fade delete-slider-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <form   method="POST" action="delete_slider.php"   >
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h4>Are you sure you wanna delete this slider image?</h4>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" id="id" name="slider_id">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger" name="delete">DELETE</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add Sliders</h2>
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

                                    <form  data-parsley-validate class="form-horizontal form-label-left col-lg-offset-2 "  method="POST" action="home-page.php" enctype="multipart/form-data"  >


                                        <div class="form-group ">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Image <span class="required">*</span></label>
                                            <div class="col-md-5 col-sm-5 col-xs-12 ">

                                                <div class="input-group">
                                                    <label class="input-group-btn">
                                                        <span class="btn btn-default">
                                                            Browse <input type="file" style="display: none;" required="required" name="slider_image">
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control" readonly>
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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-5 col-sm-5  col-xs-12">
                                                <input type="text"  name="slider_name" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Page <span class="required">*</span>
                                            </label>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <select class="form-control category_form" name="slider_link" >
                                                    <?php
                                                    $sql_page = "select page_name, page_link from pages";

                                                    $result_page = $mysql->query($sql_page);

                                                    if ($result_page->num_rows > 0) {
                                                        while ($row = $result_page->fetch_assoc()) {

                                                            $page_name = $row['page_name'];
                                                            $page_link = $row['page_link'];
                                                            
                                                            $formatted_name = str_replace('_', ' ', $page_name);
                                                            ?>
                                                    
                                                    
                                                            <option value="<?php echo $page_link ?>" ><?php echo $formatted_name ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>

                                                </select>
                                            </div>

                                        </div>

                                        <br><br>


                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12 pull-right">
                                                <button class="btn btn-primary" type="reset">Reset</button>
                                                <button type="submit" class="btn btn-default" name="add">Save</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="clearfix"></div>

                    <?php
                    $main_product_1 = 0;
                    $main_product_2 = 0;

                    $sql_main_product = "select main_product_id,product_id from main_products";

                    $result_main_product = $mysql->query($sql_main_product);

                    if ($result_main_product->num_rows > 0) {
                        while ($row = $result_main_product->fetch_assoc()) {
                            if ($row['main_product_id'] == 1) {
                                $main_product_1 = $row['product_id'];
                            } else
                            if ($row['main_product_id'] == 2) {
                                $main_product_2 = $row['product_id'];
                            }
                        }
                    }
                    ?>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Main Banners</h2>
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

                                    <div class="row">

                                        <form  data-parsley-validate class="form-horizontal form-label-left col-lg-offset-1 "  method="POST" action="home-page.php" enctype="multipart/form-data"  >
                                            <h3>Main Banner 1</h3>
                                            <div class="form-group">
                                                </label>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <select class="form-control category_form" name="product_1_id" >
                                                        <?php
                                                        $sql_product = "select product_id, product_name from product";

                                                        $result_product = $mysql->query($sql_product);

                                                        if ($result_product->num_rows > 0) {
                                                            while ($row = $result_product->fetch_assoc()) {

                                                                $product_id = $row['product_id'];
                                                                $product_name = $row['product_name'];
                                                                ?>

                                                                <option 
                                                                <?php
                                                                if ($main_product_1 == $product_id) {
                                                                    echo "selected";
                                                                }
                                                                ?>

                                                                    value="<?php echo $product_id ?>" ><?php echo $product_name ?></option>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>

                                                    </select>
                                                </div>

                                                <div class="col-md-3 col-sm-3 col-xs-12 ">
                                                    <button type="submit" class="btn btn-default" name="select-product-1">Save</button>
                                                </div>

                                            </div>
                                        </form>
                                        <form  data-parsley-validate class="form-horizontal form-label-left col-lg-offset-1 "  method="POST" action="home-page.php" enctype="multipart/form-data"  >

                                            <br>
                                            <div class="ln_solid"></div>

                                            <h3>Main Banner 2</h3>
                                            <div class="form-group">
                                                </label>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <select class="form-control category_form" name="product_2_id" >
                                                        <?php
                                                        $sql_product = "select product_id, product_name from product";

                                                        $result_product = $mysql->query($sql_product);

                                                        if ($result_product->num_rows > 0) {
                                                            while ($row = $result_product->fetch_assoc()) {

                                                                $product_id = $row['product_id'];
                                                                $product_name = $row['product_name'];
                                                                ?>
                                                                <option 
                                                                <?php
                                                                if ($main_product_2 == $product_id) {
                                                                    echo "selected";
                                                                }
                                                                ?>

                                                                    value="<?php echo $product_id ?>" ><?php echo $product_name ?></option>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>

                                                    </select>
                                                </div>

                                                <div class="col-md-3 col-sm-3 col-xs-12 ">
                                                    <button type="submit" class="btn btn-default" name="select-product-2">Save</button>
                                                </div>

                                            </div>



                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Main Jumbotron</h2>
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
                                    <form  data-parsley-validate class="form-horizontal form-label-left col-lg-offset-2 "  method="POST" action="home-page.php" enctype="multipart/form-data"  >


                                        <div class="form-group ">

                                            <div class="col-md-5 col-sm-5 col-xs-12 ">

                                                <div class="input-group">
                                                    <label class="input-group-btn">
                                                        <span class="btn btn-default">
                                                            Browse <input type="file" style="display: none;" required="required" name="jumbotron_image">
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control" readonly>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <button type="submit" class="btn btn-default" name="save_jumbotron">Save</button>
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
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (isset($_POST['save_jumbotron'])) {


                        $jumbotron_image = $_FILES['jumbotron_image']['name'];


                        $save_query = "update banners set banner_image = '$jumbotron_image' where banner_name = 'main_jumbotron'";

                        mysqli_query($mysql, $save_query)
                                or die(mysqli_error($mysql));

                        $target_dir = "../images/uploads/";
                        $target_file = $target_dir . basename($_FILES["jumbotron_image"]["name"]);

                        move_uploaded_file($_FILES["jumbotron_image"]["tmp_name"], $target_file);
                    }
                    ?>

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
