

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

            <div class="row history-row"  style="height: 500px; margin: 50px 10px 0 10px;">
                <div class="container-fluid">
                    <div class="row head-container text-center" >
                        <p class="head-text" style="">Our History
                        </p>
                    </div>
                    <div class="row body-container text-center">
                        <p class="body-text">
                            Aromacology Sensi offers a wide-array of Skin-care products which are designed to fit Asians’ sensitive skin.  Using state of the art manufacturing facilities,  and with the approval of the Bureau of Food and Drugs, Aromacology Sensi’s products are carefully crafted from all naturally-based raw materials like herbs, flowers, and fruits extracts; a true perfect blend of nature and science.
                        </p>
                        <p class="body-text">
                            Aromacology Sensi started with one outlet in January 2003 at NCCC Mall Davao.  Not for long, people from within and outside Davao couldn’t 	help but 	notice the effectiveness of its products, not to mention its affordability which further made it one of the fastest brand of choice for beauty conscious individuals.  It was also featured in many articles, both local and national, as a wise alternative for skincare that is proudly Davao-made. After a year, Aromacology 	Sensi 	opened 	its first franchise outlet in Davao City, which was followed	 by 	the opening of another franchise outlet in leading malls in Davao as well as in other cities in Mindanao. Its success is mainly attributed to two distinct features of Aromacology Sensi products; “Quality and Affordability”, which are seldom found in any other brands.
                        </p>

                        <p class="body-text">
                            In November 2006, Aromacology Sensi introduced its new marketing scheme - the multi-level network marketing. With this, the company was able to expand with more than 40,000 independent distributors serving ever growing loyal clients all over the country and soon in major cities in Asia.  The company’s vision is to become a trusted household name in skin care products and a reliable business partner to individuals who want to achieve financial freedom and independence. 
                        </p>
                    </div>

                </div>
            </div>

            <div class="row jumbotron-row" style="height: 700px; margin: 10px 10px 0 10px">
                <a href="#"> <img class="img-responsive" style="height:auto;  max-width: 100%;" src="images/placeholders/Jumbotron.png" alt="aromacology"></a>
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