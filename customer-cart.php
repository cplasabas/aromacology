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

        <script>
            (function () {
                $('#featured-carousel').carousel({interval: 3600});
            }());

            (function () {
                $('.featured-carousel .item').each(function () {
                    var itemToClone = $(this);

                    for (var i = 1; i < 4; i++) {
                        itemToClone = itemToClone.next();

                        // wrap around if at end of item collection
                        if (!itemToClone.length) {
                            itemToClone = $(this).siblings(':first');
                        }

                        // grab item, clone, add marker class, add to collection
                        itemToClone.children(':first-child').clone()
                                .addClass("cloneditem-" + (i))
                                .appendTo($(this));
                    }
                });
            }());
        </script>

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
                                            <li ><a href="customer-register.php"  >Register</a></li> 
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
                                        <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">HOME<span class="caret"></span></a>
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
                                        <li><a href=""  >OPPORTUNITY</a></li> 
                                        <li><a href=""  >LIFESTYLE</a></li> 
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>  
            </div>

            <div class="row main-row"  style="height: 500px; margin: 50px 10px 100px 10px;">

                <div class="row head-container text-center" style="margin-bottom: 5%;">
                    <p class="head-text" style="">Cart
                    </p>
                </div>
                <div class="container-fluid">
                    <?php
                    $total = 0;

                    $user_id = $_SESSION['id'];
                    $sql_cart = "select product.product_name, product.product_price, product.product_image, cart.quantity from cart left join product on cart.product_id = product.product_id where cart.user_id = $user_id";

                    $result_cart = $mysql->query($sql_cart);

                    if ($result_cart->num_rows > 0) {
                        ?>

                        <div class="col-lg-7">
                            <div class="row ">
                                <table class="table" >
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th>Price</th>

                                        </tr>
                                    </thead>
                                    <tbody  >

                                        <?php
                                        while ($row = $result_cart->fetch_assoc()) {
                                            $total += $row['product_price'] * $row['quantity'];
                                            $product_name = $row['product_name'];
                                            $product_price = $row['product_price'];
                                            $product_image = $row['product_image'];
                                            $product_amount = $row['quantity'];
                                            
                                             $total_format = number_format($total, 2, '.', ',');
                                            ?>
                                            <tr>
                                                <td class='col-lg-2'>
                                                    <img class='img-responsive' src='images/uploads/<?php echo $product_image ?>'>
                                                </td>
                                                <td class='col-lg-4 '><p style="text-transform: capitalize"><?Php echo $product_name ?></p></td>
                                                <td class='col-lg-3 '><p><?Php echo $product_amount ?></p></td>
                                                <td class='col-lg-3 '><p>&#8369;<?Php echo $product_price ?></p></td>

                                            </tr>
        <?php
    }
    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-4 col-lg-offset-1">
                            <div class="row">
                                <table class="table" >
                                    <thead>
                                        <tr>
                                            <th>Order Summary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Subtotal: <p class="pull-right">&#8369;<?php echo $total_format; ?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Total: <p class="pull-right">&#8369;<?php echo $total_format; ?></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row">
                                <form class = "product-page-form pull-right"  action = "checkout.php" method = "post">
                                    <button type = "submit" name = "submit" class = "btn btn-default btn-large add-to-cart-button">PLACE ORDER</button>
                                </form>
                            </div>
                        </div>
    <?php
} else {
    ?>
                        <div class = "container-fluid text-center text-muted">
                            <h1> NO PRODUCTS </h1>
                        </div>
    <?php
}
?>

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