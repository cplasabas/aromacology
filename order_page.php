<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Aromacology</title>
        <link rel="shortcut icon" type="image/png" href="images/aromacology.png"/>

        <link rel="icon" type="image/png" href="images/favicons/Aromacology-16x16.png" sizes="16x16">  
        <link rel="icon" type="image/png" href="images/favicons/Aromacology-32x32.png" sizes="32x32">  
        <link rel="icon" type="image/png" href="images/favicons/Aromacology-96x96.png" sizes="96x96">  

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">

        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>

<?php
        session_start();
        require_once 'config.php';
        ?>
    </head>

    <body>


        <div class="container-fluid" style="margin: 0 15% 0 15%;">

            <div class="row nav-row" style="height: 150px; margin: 0 10px 0 10px;">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="height: 100%;">
                    <div class="container-fluid">
                        <a href="index.php"><img class="img-responsive" style="height:auto; max-width: 100%;  width: 100%;" src="images/aromacology-logo.png" alt="aromacology"></a>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12" style="height: 100%;">
                    <div class="container-fluid">
                        <div class="row " style="height: 50%; border-bottom:2px solid #e55227;">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12  " style="height: 100%; padding-left: 25px; padding-top:2%; ">
                                <div class="row contact-head-header">
                                    Order online or Call us:
                                </div>
                                <div class="row contact-head">
                                    <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> (+63) 922-84-3888<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">(+63) 925-543-9609</a></li>
                                            <li><a href="#">(+63) 998-794-1310</a></li>
                                        </ul>
                                    </li>
                                </div>

                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-3" style="height: 100%;  padding-top:2.5%;">
                                <div class="row">
                                    <a href="https://www.facebook.com/AromacologySensiPhilippines/"  target="_blank" class="social-media" ><img class="img-responsive pull-left " style="height:auto; width:25px; margin: 0 10px 0 10px;" src="images/facebook-letter-logo.png" alt="aromacology"></a>
                                    <a href="https://twitter.com/aromacologyph"  target="_blank" class="social-media"><img class="img-responsive pull-left social-media" style="height:auto; width:25px; margin: 0 10px 0 10px;" src="images/twitter-logo-silhouette.png" alt="aromacology"></a>
                                    <a href="https://www.instagram.com/basicorganic/ "   target="_blank"   class="social-media"><img class="img-responsive pull-left social-media" style="height:auto; width:25px; margin: 0 10px 0 10px;" src="images/instagram-social-network-logo-of-photo-camera.png" alt="aromacology"></a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 col-sm- col-xs-4 " style="height: 100%;  padding-top:2.5%;">
                                <div class="row">
                                    <ul class=" navbar-nav top-nav">
                                        <li ><a href=""  class="app-button" >Get the App</a></li> 
                                        <?php
                                        if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
                                            ?>
                                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="about-info.php?id=1">Manage Account</a></li>
                                                    <li><a href="about-info.php?id=1">Orders</a></li>
                                                    <li><a href="logout.php">Logout</a></li>
                                                </ul>
                                            </li>

                                            <?php
                                        } else {
                                            ?>
                                            <li class="active"><a href="customer-register.php"  >Register</a></li> 
                                            <li ><a href="customer-login.php"  >Login</a></li> 

                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-1 " style="height: 100%;">
                                <div class="row center-block">
                                    <span id="cart-badge" class="badge badge-notify  cart-badge pull-right" >0</span>
                                    <?php
                                    if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {

                                        echo "<a href='customer-cart.php'>";
                                    } else {
                                        echo "  <a href='customer-login.php'>";
                                    }
                                    ?>

                                    <img class="img-responsive " style="height:auto; width:30px;" src="images/shopping-cart.png" alt="aromacology"> 

                                    <?php
                                    echo "</a>";
                                    ?>
                                </div>
                            </div>

                        </div>
                        <div class="row" style="height: 50%; padding-top:3%;">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>                        
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="main-nav">
                                    <ul class=" navbar-nav  navbar-right ">
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">HOME<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about-info.php?id=1">ABOUT</a></li>
                                                <li><a href="about-info.php?id=1">HISTORY</a></li>
                                                <li><a href="about-info.php?id=1">MISSION</a></li>
                                                <li><a href="about-info.php?id=1">VISION</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">BEAUTY<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="product-info.php?id=1">HAIR CARE</a></li>
                                                <li><a href="product-info.php?id=2">FACE CARE</a></li>
                                                <li><a href="product-info.php?id=3">FOOT CARE</a></li>
                                                <li><a href="product-info.php?id=4">BODY CARE</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">WELLNESS<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="product-info.php?id=5">FOOD</a></li>
                                                <li><a href="product-info.php?id=6">AROMATHERAPY</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="store.php"  >STORE</a></li> 
                                        <li><a href="blog.php"  >BLOG</a></li> 
                                        <li><a href="opportunity.php"  >OPPORTUNITY</a></li> 
                                        <li ><a href="lifestyle.php"  >LIFESTYLE</a></li> 
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="row login-row"  style="height: 500px; margin: 50px 10px 0 10px;">

                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1 customer-login-head">
                            <p class="customer-login-text">My Order</p>
                        </div>
                    </div>

                    <div class="row">
                        <?php
                        if (isset($_GET['id'])) {
                            $product_id = $_GET["id"];
                        }
                        ?>


                        <div class="clearfix"></div>    

                        <div class="add-product-button  col-md-offset-1 pull-left ">
                            <a class="btn btn-default newsletter-button" href="manage_account.php">
                                <i class="glyphicon glyphicon-chevron-left"></i> Back
                            </a>
                        </div>
                        <br>  <br>  <br>




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
                            <div class="col-md-10 col-sm-10 col-md-offset-1 col-xs-12">
                                <h2>Order Information</h2>


                                <br/>

                                <div class="row">
                                    <div class="col-md-5 col-md-offset-1 order-number" style="font-weight: bold; font-size: 20px;">
                                        Order Number # <?php echo $order_id ?>

                                        - <?php echo $order_status ?>
                                    </div>
                                </div>

                                <div class="row order-date" style=" font-size: 14px;">

                                    <div class="col-md-3 col-md-offset-1 capitalize">
                                        Order Date: <?php echo $order_date ?>
                                    </div>
                                </div>
                                <br><br><br>

                                <div class="row" style=" font-size: 16px; font-weight: bold;">
                                    <div class="col-md-3 col-md-offset-1 capitalize" >
                                        Shipping Address: 
                                    </div>

                                    <div class="col-md-3 col-md-offset-1 capitalize" >
                                        Shipping Method: 
                                    </div>

                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-1 capitalize">
                                        <?php echo $fromatted_address ?>
                                    </div>

                                    <div class="col-md-3 col-md-offset-1 capitalize">
                                        Free Shipping - Free
                                    </div>

                                </div>

                                <div class="ln_solid"></div>
                                <br><br>
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

                        <br> <br> <br>
                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-md-offset-1 col-xs-12">
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
                                                            <td class="col-md-2"><img class="img-responsive" style="margin: 0 auto; width:50%;" src="images/uploads/<?php echo $product_image ?>" ></td>
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

                        <div class="row contact-row" style=" margin: 300px 10px 30px 10px">
                            <div class="container-fluid">
                                <div class="row text-center" style="padding-top: 2%;">
                                    <p class="contact-header">Get in Touch</p>
                                </div>
                                <div class="row"  style="padding: 50px;">
                                    <div class="col-lg-4 col-lg-offset-1" >
                                        <div class="row" style="margin-bottom: 10px;">
                                            <p class="contact-text"> (+63) 922-84-3888 </p>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <p class="contact-text"> (+63) 925-543-9609 </p>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <p class="contact-text"> (+63) 998-794-1310  </p>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <p class="contact-text"> contact@aromacology-sensi.com  </p>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <p class="contact-text"> Door 1, 546 Elpidio Quirino Avenue, Davao City  </p>
                                        </div>


                                    </div>


                                    <div class="col-lg-6 col-lg-offset-1 ">
                                        <form class="newsletter-form" action="cpntact-email.php" method="post">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="icon-addon addon-lg">      
                                                                <input type="text" placeholder="Name" class="form-control" id="name">
                                                                <label for="name" class="glyphicon glyphicon-user" rel="tooltip" title="name"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="icon-addon addon-lg">      
                                                                <input type="text" placeholder="Email" class="form-control" id="email">
                                                                <label for="email" class="glyphicon glyphicon-envelope" rel="tooltip" title="email"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <div class="icon-addon addon-lg">      
                                                                <input type="text" placeholder="Message" class="form-control" id="message">
                                                                <label for="message" class="glyphicon glyphicon-pencil" rel="tooltip" title="email"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row pull-right">
                                                    <div class="col-lg-12">
                                                        <button type="submit" name="submit" class="btn btn-default newsletter-button">SUBMIT</button>
                                                    </div>

                                                </div>
                                            </div>

                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="row footer-row" style="height: 400px; background-color: #ebebeb; padding-top: 20px;">
                            <div class="row" style="padding: 50px 10px 0 10px;">
                                 <div class="col-lg-2 col-lg-offset-1" >
                    <div class="row" >
                        <p class="footer-head text-center"> INFORMATION</p>
                        <ul class="footer-body text-center" style="padding: 20px 0 0 0;">
                            <li><a href="about-info.php?id=1">ABOUT</a></li>
                            <li><a href="about-info.php?id=1">HISTORY</a></li>
                            <li><a href="about-info.php?id=1">MISSION</a></li>
                            <li><a href="about-info.php?id=1">VISION</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="row" >
                        <p class="footer-head text-center">SHOP</p>
                        <ul class="footer-body text-center" style="padding: 20px 0 0 0;">


                            <li><a href="product-info.php?id=1">HAIR CARE</a></li>
                            <li><a href="product-info.php?id=2">FACE CARE</a></li>
                            <li><a href="product-info.php?id=3">FOOT CARE</a></li>
                            <li><a href="product-info.php?id=4">BODY CARE</a></li>
                            <li><a href="product-info.php?id=5">FOOD</a></li>
                            <li><a href="product-info.php?id=6">AROMATHERAPY</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="row" >
                        <p class="footer-head text-center"> CUSTOMER SERVICE</p>
                        <ul class="footer-body text-center" style="padding: 20px 0 0 0;">
                            <li><a href="#">CONTACT</a></li>
                            <li><a href="https://www.google.com.ph/maps?q=aromacology+sensi&biw=1920&bih=960&dpr=1&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjCisbe5L7WAhXLopQKHVA8Dx4Q_AUIDSgE">MAP</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="row">
                        <p class="footer-head text-center"> MY ACCOUNT</p>
                        <ul class="footer-body text-center" style="padding: 20px 0 0 0;">

                            <?php
                            if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
                                ?>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="manage_account.php">ACCOUNT</a></li>
                                        <li><a href="logout.php">LOGOUT</a></li>
                                    </ul>
                                </li>

                                <?php
                            } else {
                                ?>
                                <li ><a href="customer-register.php"  >REGISTER</a></li> 
                                <li ><a href="customer-login.php"  >LOGIN</a></li> 

                                <?php
                            }
                            ?>

                        </ul>
                    </div>
                </div>

                                <div class="col-lg-2">
                                    <div class="row">
                                        <p class="footer-head text-center">SOCIAL</p>
                                        <div  class="footer-body text-center" style="padding: 20px 0 0 0;">
                                            <a href="https://www.facebook.com/AromacologySensiPhilippines/"  target="_blank" class="social-media" ><img class="img-responsive pull-left " style="height:auto; width:25px; margin: 0 10px 0 10px;" src="images/facebook-letter-logo.png" alt="aromacology"></a>
                                            <a href="https://twitter.com/aromacologyph"  target="_blank" class="social-media"><img class="img-responsive pull-left social-media" style="height:auto; width:25px; margin: 0 10px 0 10px;" src="images/twitter-logo-silhouette.png" alt="aromacology"></a>
                                            <a href="https://www.instagram.com/basicorganic/ "   target="_blank"   class="social-media"><img class="img-responsive pull-left social-media" style="height:auto; width:25px; margin: 0 10px 0 10px;" src="images/instagram-social-network-logo-of-photo-camera.png" alt="aromacology"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row copyright-row " style="margin: 50px 10px 0 10px;">
                                <div class="container-fluid">
                                    <div class="col-lg-6 col-centered text-center" style=" padding-top:2.5%;">
                                        <p class="copyright-text" style="font-family: arial;  color: #717171;">
                                            Copyright © 2017 Aromacology Sensi, All Rights Reserved
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>  


                    </body>

                    </html>