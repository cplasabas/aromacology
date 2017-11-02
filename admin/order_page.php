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

                        <h1>Order Page</h1>
                    </div>

                    <div class="clearfix"></div>    

                    <div class="add-product-button pull-left ">
                        <a class="btn btn-app" href="orders.php">
                            <i class="fa fa-chevron-left"></i> Back
                        </a>
                    </div>




                    <div class="clearfix"></div>

                    <?php
                    if (isset($_GET['id'])) {
                        $order_id = filter_input(INPUT_GET, "id");
                    }

                    $q_order = "select orders.order_id,user_detail.first_name,user_detail.last_name,user_detail.address, orders.order_status,orders.order_date from orders left join user_detail on user_detail.user_detail_id = orders.user_id left join users on users.user_id = user_detail.user_detail_id where users.type = 1 and order_id = $order_id";

                    $result_order = $mysql->query($q_order);
                    if ($result_order->num_rows > 0) {

                        while ($row = $result_order->fetch_assoc()) {
                            $fname = $row['first_name'];
                            $lname = $row['last_name'];

                            if ($row['order_status'] == 1) {
                                $order_status = "Not Processed";
                            } else if ($row['order_status'] == 2) {
                                $order_status = "Processed";
                            } else if ($row['order_status'] == 3) {
                                $order_status = "Delivered";
                            } else if ($row['order_status'] == 4) {
                                $order_status = "Closed";
                            }
                            $order_date = $row['order_date'];

                            $address = $row['address'];

                            $fromatted_address = str_replace(',', '<br />', $address);
                        }
                    }
                    ?>


                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Order Information</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content ">
                                    <br />

                                    <div class="row">
                                        <div class="col-md-3 col-md-offset-1 order-number" style="font-weight: bold; font-size: 20px;">
                                            Order Number # <?php echo $order_id ?>

                                            - <?php echo $order_status ?>
                                        </div>

                                        <div class="col-md-3 pull-right" >
                                            <?php
                                            if ($order_status != "Closed") {
                                                ?>

                                                <form  data-parsley-validate class="form-horizontal form-label-left col-lg-offset-2 "  method="POST" action="order_page.php"   >

                                                    <div class="form-group">

                                                        <button type="submit" class="btn btn-lg btn-default uppercase" name="next">
                                                            <?php
                                                            if ($order_status == "Not Processed") {
                                                                echo "Process";
                                                            } else if ($order_status == "Processed") {
                                                                echo "Deliver";
                                                            } else if ($order_status == "Delivered") {
                                                                echo "Close";
                                                            }
                                                            ?>
                                                        </button>

                                                    </div>


                                                    <?php
                                                }
                                                ?>
                                        </div>
                                    </div>

                                    <div class="row order-date" style=" font-size: 14px;">

                                        <div class="col-md-3 col-md-offset-1 capitalize">
                                            Order Date: <?php echo $order_date ?>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>

                                    <div class="row" style=" font-size: 14px; font-weight: bold;">
                                        <div class="col-md-3 col-md-offset-1 capitalize">
                                            Customer Name: <?php echo $fname . " " . $lname ?>
                                        </div>

                                    </div>

                                    <div class="ln_solid"></div>

                                    <div class="row" style=" font-size: 16px; font-weight: bold;">
                                        <div class="col-md-3 col-md-offset-1 capitalize" >
                                            Shipping Address: 
                                        </div>

                                        <div class="col-md-3 col-md-offset-1 capitalize" >
                                            Shipping Method: 
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3 col-md-offset-1 capitalize">
                                            <?php echo $fromatted_address ?>
                                        </div>

                                        <div class="col-md-3 col-md-offset-1 capitalize">
                                            Free Shipping - Free
                                        </div>

                                    </div>

                                    <div class="ln_solid"></div>

                                    <div class="row"  style=" font-size: 16px; font-weight: bold;">
                                        <div class="col-md-3 col-md-offset-1 capitalize" >
                                            Billing Address: 
                                        </div>

                                        <div class="col-md-3 col-md-offset-1 capitalize" style=" font-size: 16px;">
                                            Billing Method: 
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3 col-md-offset-1 capitalize">
                                            <?php echo $fromatted_address ?>
                                        </div>

                                        <div class="col-md-3 col-md-offset-1 capitalize">
                                            Cash on Delivery
                                        </div>

                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>


                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Products <small>list of products ordered</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th></th>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Quantity</th>
                                                <th>Price</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $total = 0;
                                            $sql_products = "select order_product.product_id, order_product.quantity,product.product_image, product.product_name, product.product_description,product.product_price,product_category.category_name from order_product left join product on order_product.product_id = product.product_id left join product_category on product_category.category_id = product.category_id where order_product.order_id = $order_id ";
                                            $result_products = $mysql->query($sql_products);

                                            if ($result_products->num_rows > 0) {
                                                while ($row = $result_products->fetch_assoc()) {


                                                    $product_id = $row['product_id'];
                                                    $product_image = $row['product_image'];
                                                    $product_quantity = $row['quantity'];
                                                    $product_name = $row['product_name'];
                                                    $product_description = $row['product_description'];
                                                    $product_price = $row['product_price'];
                                                    $product_category = $row['category_name'];

                                                    $total += $product_price * $product_quantity;
                                                    ?>

                                                    <tr class="content">
                                                        <td scope="row"><?php echo $product_id ?>   </td>
                                                        <td class="col-md-2"><img class="img-responsive" style="margin: 0 auto; width:50%;" src="../images/uploads/<?php echo $product_image ?>" ></td>
                                                        <td class="uppercase" ><?php echo $product_name ?></td>                                                      
                                                        <td class="capitalize"><?php echo $product_category ?></td>
                                                        <td class="capitalize"><?php echo $product_quantity ?></td>
                                                        <td>&#8369; <?php echo $product_price ?></td>

                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>

                                        </tbody>
                                        <tfoot>
                                            <tr class="content">
                                                <td scope="row"> </td>
                                                <td > </td>
                                                <td > </td>
                                                <td >  </td>
                                                <td style="font-weight: bold;font-size: 20px;"> Total  </td>
                                                <td style="font-weight: bold;font-size: 20px;">&#8369; <?php echo $total . ".00"; ?></td>

                                            </tr>

                                        </tfoot>
                                    </table>

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
