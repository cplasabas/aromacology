<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Aromacology</title>

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

                                    <?php
                                    $facebook = "";
                                    $twitter = "";
                                    $instagram = "";

                                    $q_contact = "select * from contact";

                                    $result_contact = $mysql->query($q_contact);
                                    if ($result_contact->num_rows > 0) {

                                        while ($row = $result_contact->fetch_assoc()) {
                                            if ($row['contact_name'] === "facebook") {
                                                $facebook = $row['contact_details'];
                                            } else if ($row['contact_name'] === "twitter") {
                                                $twitter = $row['contact_details'];
                                            } else if ($row['contact_name'] === "instagram") {
                                                $instagram = $row['contact_details'];
                                            }
                                        }
                                    }
                                    ?>
                                    <a href="<?php echo $facebook; ?>"  target="_blank" class="social-media" ><img class="img-responsive pull-left " style="height:auto; width:25px; margin: 0 10px 0 10px;" src="images/facebook-letter-logo.png" alt="aromacology"></a>
                                    <a href="<?php echo $twitter; ?>"  target="_blank" class="social-media"><img class="img-responsive pull-left social-media" style="height:auto; width:25px; margin: 0 10px 0 10px;" src="images/twitter-logo-silhouette.png" alt="aromacology"></a>
                                    <a href="<?php echo $instagram; ?> "   target="_blank"   class="social-media"><img class="img-responsive pull-left social-media" style="height:auto; width:25px; margin: 0 10px 0 10px;" src="images/instagram-social-network-logo-of-photo-camera.png" alt="aromacology"></a>
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
                                                    <li><a href="manage_account.php">Manage Account</a></li>
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
                                        <li ><a href="opportunity.php"  >OPPORTUNITY</a></li> 
                                        <li ><a href="lifestyle.php"  >LIFESTYLE</a></li> 
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row head-row" style="height: 700px;  margin: 10px;">
                <div class="col-lg-8 hidden-md hidden-sm hidden-xs" >

                    <div class="row head-slider" style="height:auto; width: 98%;  border:2px solid #e55227;">
                        <div id="main-carousel" class="carousel slide" data-ride="carousel" style=" width: 100%;" >
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" >
                                <?php
                                $sql_main_slider = "select * from main_slider";

                                $result_main_slider = $mysql->query($sql_main_slider);

                                if ($result_main_slider->num_rows > 0) {
                                    $count = 0;
                                    while ($row = $result_main_slider->fetch_assoc()) {
                                        if ($count == 0) {
                                            echo " <div class='item active carousel-item'>";
                                        } else {
                                            echo " <div class='item  carousel-item'>";
                                        }
                                        ?>
                                        <a href="<?php echo $row['slider_link'] ?>"> <img  src="images/uploads/<?php echo $row['slider_image'] ?>" alt="b/<?php echo $row['slider_name'] ?>"></a>
                                    </div>
                                    <?php
                                    $count++;
                                }
                            }
                            ?>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#main-carousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#main-carousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>


            <div class=" col-lg-4 col-md-12 col-sm-12  col-xs-12" >

                <?php
                $sql_main_banner = "select main_products.main_product_id, product.product_id ,product.product_image from main_products left join product on product.product_id = main_products.product_id";

                $main_banner_1 = "";
                $main_banner_2 = "";

                $main_banner_1_link = "";
                $main_banner_2_link = "";

                $result_main_banner = $mysql->query($sql_main_banner);

                if ($result_main_banner->num_rows > 0) {
                    while ($row = $result_main_banner->fetch_assoc()) {
                        if ($row['main_product_id'] == 1) {
                            $main_banner_1 = $row['product_image'];
                            $product_id = $row['product_id'];

                            $main_banner_1_link = "product-page.php?product-id=$product_id";
                        }

                        if ($row['main_product_id'] == 2) {
                            $main_banner_2 = $row['product_image'];
                            $product_id = $row['product_id'];

                            $main_banner_2_link = "product-page.php?product-id=$product_id";
                        }
                    }
                }
                ?>


                <div class="row head-product-1" style="height: 40.7%; margin-bottom: 10%; border:2px solid #e55227;">
                    <a href="<?php echo $main_banner_1_link; ?>"> <img class="img-responsive" style="height:100%;padding: 20px; margin: 0 auto;" src="images/uploads/<?php echo $main_banner_1; ?>"></a>
                </div>
                <div class="row head-product-1" style="height: 50%; border:2px solid #e55227;">
                    <a href="<?php echo $main_banner_2_link; ?>"> <img class="img-responsive" style="height:100%; padding: 20px; margin: 0 auto;" src="images/uploads/<?php echo $main_banner_2; ?>"></a>
                </div>
            </div>
        </div>

        <div class="row featured-row" style="height: 600px; margin: 40px 10px 10px 10px;">
            <div class="container-fluid">
                <div class="row text-center" style="padding-top: 1%; border-top:2px solid #e55227;border-bottom:2px solid #e55227;">
                    <p class="featured-header">Featured Products</p>
                </div>
                <div class="row featured-row" style="height: 85%; margin-top:40px;">
                    <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
                        <div class="carousel-inner">

                            <?php
                            $sql_featured_products = "select * from product where is_featured = 1";

                            $result_featured_products = $mysql->query($sql_featured_products);

                            $product_category = "";
                            $product_image = "";


                            if ($result_featured_products->num_rows > 0) {
                                $count = 0;

                                while ($row = $result_featured_products->fetch_assoc()) {

                                    $product_image = $row['product_image'];

                                    $sql_product_category = "select category_name from product_category where category_id = " . $row['category_id'];

                                    $result_product_category = $mysql->query($sql_product_category);
                                    $product_category = $result_product_category->fetch_object()->category_name;

                                    if ($count == 0) {
                                        echo "<div class='item active'>";
                                    } else {
                                        echo "<div class='item '>";
                                    }

                                    echo " <div class='col-md-3 col-sm-6 col-xs-12'>
                                    <div class='container-fluid text-center'>
                                        <div class='row' style='margin: 10px 0 10px 0;' > ";


                                    if ($row['is_new'] == 1) {
                                        echo"<span class='notify-badge'>NEW</span>";
                                    }


                                    echo" <img src='images/uploads/" . $product_image . "' style='height: 50%; margin:0 auto;' class='img-responsive'>
                                        </div>
                                        <div class='row featured-product-category'>
                                            " . $product_category . "
                                        </div>
                                        <div class='row featured-product-name' >
                                            " . $row['product_name'] . "
                                        </div>
                                        <div class='row featured-product-price'>
                                            Php " . $row['product_price'] . "
                                        </div>
                                        <div class='row featured-product-button' >
                                            <form class='featured-products-form' >
                                                <input type='hidden' name='product-id' value='" . $row['product_id'] . "'>
                                                <button type='add-to-car' name='add-to-cart' class='btn btn-default add-to-cart-button'>ADD TO CART</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>";


                                    $count ++;
                                }
                            }
                            ?>  

                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <script>
            $('.carousel[data-type="multi"] .item').each(function () {
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                for (var i = 0; i < 2; i++) {
                    next = next.next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }

                    next.children(':first-child').clone().appendTo($(this));
                }
            });

            $(".featured-products-form").submit(function (e) { //user clicks form submit button
                var form_data = $(this).serialize(); //prepare form data for Ajax post

                $.ajax({//make ajax request to cart_process.php
                    url: "add-to-cart.php",
                    type: "POST",
                    dataType: "json", //expect json value from server
                    data: form_data
                }).done(function (data) { //on Ajax success
                    alert(data);
                });
                e.preventDefault();
            });
        </script>

        <div class="row jumbotron-row" style="height: 700px; margin: 10px 10px 0 10px">

            <?php
            $sql_jumbotron = "select banner_image from banners where banner_name = 'main_jumbotron'";

            $result_jumbotron = $mysql->query($sql_jumbotron);
            $jumbotron = $result_jumbotron->fetch_object()->banner_image;
            ?>

            <a href="#"> <img class="img-responsive" style="height:auto;  max-width: 100%;" src="images/uploads/<?php echo $jumbotron; ?>" alt="aromacology"></a>
        </div>

        <div class="row blog-row" style="height: 800px; margin: 10px 10px 0 10px">

            <div class="row text-center" style="padding-top: 2%;">
                <p class="blog-header">Our Blog</p>
            </div>

            <div class="container-fluid blog-body-container" style="max-width:50%;border-bottom: 1px solid #e55227; border-top: 1px solid #e55227;">

                <?php
                $sql_blog = "select * from post limit 1";

                $result_blog = $mysql->query($sql_blog);

                $blog_title = "";
                $blog_subtitle = "";
                $blog_date = "";
                $blog_image = "";
                $blog_body = "";


                if ($result_blog->num_rows > 0) {
                    while ($row = $result_blog->fetch_assoc()) {
                        $blog_title = $row['post_title'];
                        $blog_subtitle = $row['post_subtitle'];
                        $blog_date = $row['post_date'];
                        $blog_image = $row['post_image'];
                        $blog_body = $row['post_body'];
                    }
                }
                ?>
                <div class="row blog-sub-container" style="padding-top: 5%;">
                    <p class="blog-subtitle text-center"><?php echo $blog_subtitle ?></p>
                </div>
                <div class="row blog-header-container" style=" margin-bottom: 3%;">
                    <p class="blog-title text-center"><?php echo $blog_title ?></p>
                </div>
                <div class="row blog-image-container" style="padding-top: 3%; padding-bottom: 5%;">
                    <img class="img-responsive blog-image" style="margin: 0 auto; height:200px;  max-width: 100%;" src="images/uploads/<?php echo $blog_image ?>" alt="aromacology">
                </div>

                <div class="row blog-text-container" style="padding-top: 3%; padding-bottom: 5%;">
                    <p class="body-text">
                        <?php echo $blog_body ?>
                    </p>
                </div>
            </div>
            <div class="row blog-button text-center" style="margin-top: 3%;">
                <div class="container-fluid">
                    <input type="button" class="btn btn-default newsletter-button" value="View Blog" onclick="location.href = 'blog.php';">
                </div>

            </div>
        </div>

        <div class="row contact-row" style=" margin: 30px 10px 30px 10px">
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
                            <a href="<?php echo $facebook; ?>"  target="_blank" class="social-media" ><img class="img-responsive pull-left " style="height:auto; width:25px; margin: 0 10px 0 10px;" src="images/facebook-letter-logo.png" alt="aromacology"></a>
                            <a href="<?php echo $twitter; ?>"  target="_blank" class="social-media"><img class="img-responsive pull-left social-media" style="height:auto; width:25px; margin: 0 10px 0 10px;" src="images/twitter-logo-silhouette.png" alt="aromacology"></a>
                            <a href="<?php echo $instagram; ?> "   target="_blank"   class="social-media"><img class="img-responsive pull-left social-media" style="height:auto; width:25px; margin: 0 10px 0 10px;" src="images/instagram-social-network-logo-of-photo-camera.png" alt="aromacology"></a>
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