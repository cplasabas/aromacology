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
                    if (isset($_GET['id'])) {
                        $product_id = $_GET["id"];
                    }
                    ?>


                    <div class="page-title text-center ">

                        <h1>Product Page</h1>
                    </div>

                    <div class="clearfix"></div>    

                    <div class="add-product-button pull-left ">
                        <a class="btn btn-app" href="products.php">
                            <i class="fa fa-chevron-left"></i> Back
                        </a>
                    </div>


                    <div class="add-product-button pull-right col-md-1 ">
                        <a class="btn btn-app"  data-toggle="modal" data-target=".delete-product-modal">
                            <i class="fa fa-trash-o"></i> Delete
                        </a>
                    </div>

                    <div class="modal fade delete-product-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <form   method="POST" action="delete_product.php"   >
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h4>Are you sure you wanna delete this product?</h4>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" value="<?php echo $product_id ?>" name="product_id">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


                                        <button type="submit" class="btn btn-danger" name="delete">DELETE</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="clearfix"></div>

                    <?php
                    $product_name = "";
                    $product_image = "";
                    $product_description = "";
                    $product_price = "";
                    $product_category_id = "";

                    $product_fb = "";
                    $product_tw = "";
                    $product_insta = "";


                    $checked = false;

                    if (isset($_GET['product-id'])) {
                        $product_id = filter_input(INPUT_GET, "product-id");
                    }


                    $q_product = "select product.category_id,product.product_name,product.product_image,product.product_description,product.product_price,product.is_featured, product_social.facebook, product_social.twitter, product_social.instagram from product left join product_social on product.product_id = product_social.product_id where product.product_id = $product_id";

                    $result_product = $mysql->query($q_product);
                    if ($result_product->num_rows > 0) {

                        while ($row = $result_product->fetch_assoc()) {
                            $product_name = $row['product_name'];
                            $product_image = $row['product_image'];
                            $product_description = $row['product_description'];
                            $product_price = $row['product_price'];
                            $product_category_id = $row['category_id'];
                            $product_fb = $row['facebook'];
                            $product_tw = $row['twitter'];
                            $product_insta = $row['instagram'];

                            if ($row['is_featured'] == 1) {
                                $checked = true;
                            }
                            
           
                        }
                    }
                    ?>


                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Product Information</h2>
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
                                    <form  data-parsley-validate class="form-horizontal form-label-left col-lg-offset-2 "  method="POST" action="save_product.php" enctype="multipart/form-data"  >
                                        <h3>General</h3>

                                        <div class="form-group ">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Image <span class="required">*</span></label>
                                            <div class="col-md-5 col-sm-5 col-xs-12 ">

                                                <div class="input-group">
                                                    <label class="input-group-btn">
                                                        <span class="btn btn-default">
                                                            Browse <input type="file" style="display: none;"  name="product_image">
                                                        </span>
                                                    </label>
                                                    <input type="text" name="image_name" class="form-control" value="<?php echo $product_image; ?>"  required="required" readonly>
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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category <span class="required">*</span>
                                            </label>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <select class="form-control category_form" name="category_id" >
                                                    <?php
                                                    $sql_category = "select category_id,category_name from product_category where category_id != 1";

                                                    $result_category = $mysql->query($sql_category);

                                                    if ($result_category->num_rows > 0) {
                                                        while ($row = $result_category->fetch_assoc()) {

                                                            $category_id = $row['category_id'];
                                                            $category_name = $row['category_name'];
                                                            ?>


                                                            <option value="<?php echo $category_id ?>"
                                                            <?php
                                                            if ($product_category_id == $category_id) {
                                                                echo " selected";
                                                            }
                                                            ?>

                                                                    ><?php echo $category_name ?></option>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>

                                                </select>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-5 col-sm-5  col-xs-12">
                                                <input type="hidden" name="product_id"  value="<?php echo $product_id ?>">

                                                <input type="text" id="first-name"  name="product_name" required="required" value="<?php echo $product_name ?>" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description <span class="required">*</span>
                                            </label>
                                            <div class="col-md-5 col-sm-5  col-xs-12">
                                                <input type="text" id="last-name" name="description" required="required"  value="<?php echo $product_description ?>"class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="control-label col-md-3 col-sm-3 col-xs-12">Price<span class="required">*</span></label>
                                            <div class="col-md-5 col-sm-5  col-xs-6">
                                                <input id="username" class="form-control col-md-7 col-xs-12" type="number" name="price" placeholder="0.00"  min="0" value="<?php echo $product_price ?>" step="0.01" title="Currency">

                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="control-label col-md-3 col-sm-3 col-xs-12">Featured</label>
                                            <div class="col-md-5 col-sm-5  col-xs-6">
                                                <input type="checkbox" name="featured" 

                                                       <?php
                                                       if ($checked) {
                                                           echo "checked='checked'";
                                                       }
                                                       ?>    />
                                            </div>

                                        </div>


                                        <br><br>
                                        <h3>Social</h3>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Facebook</label>
                                            <div class="col-md-5 col-sm-5  col-xs-12">
                                                <input type="url" id="last-name" name="fb"  value="<?php echo $product_fb ?>"class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Twitter</label>
                                            <div class="col-md-5 col-sm-5  col-xs-12">
                                                <input type="url" id="last-name" name="tw"  value="<?php echo $product_tw ?>" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Instagram</label>
                                            <div class="col-md-5 col-sm-5  col-xs-12">
                                                <input type="url" id="last-name" name="insta"  value="<?php echo $product_insta ?>" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12 pull-right">
                                                <button class="btn btn-primary" type="reset">Reset</button>
                                                <button type="submit" class="btn btn-default" name="save">Save</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>


                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Product Preview</h2>
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


                                    <div class="container-fluid" >
                                        <div class="col-lg-5 " >
                                            <div class="row product-image-row "  >
                                                <img  class="img-responsive"  src="../images/uploads/<?php echo $product_image; ?>" style="height: auto; margin: 0 auto;" alt=""/>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-lg-offset-1">
                                            <div class="row product-name-row">
                                                <p class="product-name">
                                                    <?php echo $product_name; ?>
                                                </p>

                                            </div>
                                            <div class="row product-description-row">
                                                <p class="product-description">
                                                    <?php echo $product_description; ?>
                                                </p>
                                            </div>

                                            <div class="row product-price-row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <p class="product-price">
                                                            PHP <?php echo $product_price; ?>
                                                        </p>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row product-social-media pull-right">
                                                        <a href="<?php echo $product_fb ?>"  target="_blank" class="social-media" ><img class="img-responsive pull-left " style="height:auto; width:20px; margin: 0 10px 0 10px;" src="images/facebook-letter-logo.png" alt="aromacology"></a>
                                                        <a href="<?php echo $product_tw ?>"  target="_blank" class="social-media"><img class="img-responsive pull-left social-media" style="height:auto;width:20px;; margin: 0 10px 0 10px;" src="images/twitter-logo-silhouette.png" alt="aromacology"></a>
                                                        <a href="<?php echo $product_insta ?> "   target="_blank"   class="social-media"><img class="img-responsive pull-left social-media" style="height:auto; width:20px; margin: 0 10px 0 10px;" src="images/instagram-social-network-logo-of-photo-camera.png" alt="aromacology"></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
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
    </body>
</html>
