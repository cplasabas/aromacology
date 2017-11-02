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

        $user_id = $_SESSION['id'];
        

        
        if (isset($_POST['search_submit'])) {
            $search_string = $_POST['search_string'];
            header("Location: orders.php?search=" . $search_string);
        }

        $order_status = "0";

        if (isset($_GET['order_status'])) {
            $order_status = $_GET['order_status'];
        }
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
                                            <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="about-info.php?id=1">Manage Account</a></li>
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
                            <p class="customer-login-text">My Orders</p>
                        </div>
                    </div>
                </div>
                <div class='container-fluid'>
                    <div class="clearfix"></div>

                    <div class="title_left">

                        <div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-1 form-group ">

                            <div class="input-group">

                                <label class="control-label col-md-5 col-sm-5 col-xs-12 ">Order Status: </label>
                                <div class="col-md-7 col-sm-7 col-xs-12 ">
                                    <select class="form-control order_status_form" onchange="change_status(this)">

                                        <option
                                        <?php
                                        if ($order_status == 0) {
                                            echo "selected";
                                        }
                                        ?>
                                            value="0" >All</option>
                                        <option
                                        <?php
                                        if ($order_status == 1) {
                                            echo "selected";
                                        }
                                        ?> 
                                            value="1" >Not Processed</option>
                                        <option
                                        <?php
                                        if ($order_status == 2) {
                                            echo "selected";
                                        }
                                        ?>
                                            value="2" >Processed</option>
                                        <option
                                        <?php
                                        if ($order_status == 3) {
                                            echo "selected";
                                        }
                                        ?>
                                            value="3" >Delivered</option>
                                        <option
                                        <?php
                                        if ($order_status == 4) {
                                            echo "selected";
                                        }
                                        ?>
                                            value="3" >Closed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        function change_status(selectObject) {
                            var order_status = selectObject.value;
                            var url = getPathFromUrl(window.location.href);
                            url += '?order_status=' + order_status;
                            window.location.href = url;
                        }

                        function getPathFromUrl(url) {

                            return url.split(/[?#]/)[0];
                        }
                    </script>




                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1">
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Order Number</th>
                                        <th>Order Status</th>
                                        <th>Date Order Placed</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($order_status == 0) {
                                        $sql_products = "select orders.order_id,user_detail.first_name,user_detail.last_name, orders.order_status,orders.order_date from orders left join user_detail on user_detail.user_detail_id = orders.user_id left join users on users.user_id = user_detail.user_detail_id where users.type = 1  and users.user_id = $user_id;";
                                    } else {
                                        $sql_products = "select orders.order_id,user_detail.first_name,user_detail.last_name, orders.order_status,orders.order_date from orders left join user_detail on user_detail.user_detail_id = orders.user_id left join users on users.user_id = user_detail.user_detail_id where users.type = 1 and users.user_id = $user_id and order_status = $order_status";
                                    }



                                    $result_products = $mysql->query($sql_products);

                                    if ($result_products->num_rows > 0) {
                                        while ($row = $result_products->fetch_assoc()) {


                                            $order_id = $row['order_id'];
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
                                            ?>

                                            <tr class="content">
                                                <td class="col-md-2 col-xs-2"><?php echo $order_id ?>   </td>

                                                <td class="capitalize col-md-2 col-xs-2"><?php echo $order_status ?></td>
                                                <td class="col-md-3 col-xs-3"><?php echo $order_date ?></td>
                                                <td class=" last col-md-1 col-xs-1">

                                                    <a href="order_page.php?id=<?php echo $order_id ?>" class="btn btn-default newsletter-button" ><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                                </td>
                                            </tr>
        <?php
    }
}
?>
                                </tbody>
                            </table>

                            <script>

                                $('a#delete-product-btn').click(function () {
                                    var id = $(this).data('id');
                                    $(".modal-footer #id").val(id);
                                })

                                $('a#feature-product-btn').click(function () {
                                    var id = $(this).data('id');
                                    $(".modal-footer #id").val(id);
                                })

                            </script>


<?php
if ($result_products->num_rows > 0) {
    ?>
                                <div class="container-fluid pagination-container text-center">
                                    <nav>
                                        <ul class="pagination">
                                            <a  class="pag_prev" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                            <a  class="pag_next" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </ul>
                                    </nav>
                                </div>

    <?php
} else {
    ?>
                                <div class="container-fluid text-center text-muted">
                                    <h1> NO ORDERS </h1>
                                </div>
    <?php
}
?>
                        </div>

                        <script>
                            //Pagination
                            pageSize = 10;
                            pagesCount = $(".content").length;
                            var currentPage = 1;
                            var nav = '';
                            var totalPages = Math.ceil(pagesCount / pageSize);
                            for (var s = 0; s < totalPages; s++) {
                                nav += '<a class="numeros" href="#">' + (s + 1) + '</a>';
                            }
                            $(".pag_prev").after(nav);
                            $(".numeros").first().addClass("active");
                            showPage = function () {
                                $(".content").hide().each(function (n) {
                                    if (n >= pageSize * (currentPage - 1) && n < pageSize * currentPage)
                                        $(this).show();
                                });
                            };
                            showPage();
                            $(".pagination a.numeros").click(function () {
                                $(".pagination a").removeClass("active");
                                $(this).addClass("active");
                                currentPage = parseInt($(this).text());
                                showPage();
                            });
                            $(".pagination a.pag_prev").click(function () {
                                if ($(this).next().is('.active'))
                                    return;
                                $('.numeros.active').removeClass('active').prev().addClass('active');
                                currentPage = currentPage > 1 ? (currentPage - 1) : 1;
                                showPage();
                            });
                            $(".pagination a.pag_next").click(function () {
                                if ($(this).prev().is('.active'))
                                    return;
                                $('.numeros.active').removeClass('active').next().addClass('active');
                                currentPage = currentPage < totalPages ? (currentPage + 1) : totalPages;
                                showPage();
                            });
                            //--- END PAGINATION ---//

                        </script>
                    </div>




                    <div class="row login-row"  style="height: 500px; margin: 50px 10px 0 10px;">
                        <form class="customer-login" action="register.php" method="post">
                            <div class="container-fluid ">
                                <div class="row">
                                    <div class="col-lg-10 col-lg-offset-1 customer-login-head">
                                        <p class="customer-login-text">Edit Information</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3">
                                        <div id="user_form" class="form-group">
                                            <div class="icon-addon addon-lg">      
                                                <input type="text" placeholder="Username" name="uname" class="form-control" id="email">
                                                <label for="email" class="glyphicon glyphicon-user" rel="tooltip" title="email"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-lg-offset-3">
                                        <div id="pass_form" class="form-group">
                                            <div class="icon-addon addon-lg">      
                                                <input type="password" placeholder="Pasword" name="pass" class="form-control" id="message">
                                                <label for="password" class="glyphicon glyphicon-lock" rel="tooltip" title="email"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div id="pass_form" class="form-group">
                                            <div class="icon-addon addon-lg">      
                                                <input type="password" placeholder="Confirm Pasword" name="pass_confirm" class="form-control" id="message">
                                                <label for="password" class="glyphicon glyphicon-lock" rel="tooltip" title="email"></label>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3">
                                        <div id="user_form" class="form-group">
                                            <div class="icon-addon addon-lg">      
                                                <input type="text" placeholder="Email" name="email" class="form-control" id="email">
                                                <label for="email" class="glyphicon glyphicon-envelope" rel="tooltip" title="email"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-lg-offset-3">
                                        <div id="pass_form" class="form-group">
                                            <div class="icon-addon addon-lg">      
                                                <input type="text" placeholder="First Name" name="fname" class="form-control" id="message">
                                                <label for="password" class="glyphicon glyphicon-user" rel="tooltip" title="email"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div id="pass_form" class="form-group">
                                            <div class="icon-addon addon-lg">      
                                                <input type="text" placeholder="Last Name" name="lname" class="form-control" id="message">
                                                <label for="password" class="glyphicon  glyphicon-user" rel="tooltip" title="email"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-lg-offset-3">
                                        <div id="pass_form" class="form-group">
                                            <div class="icon-addon addon-lg">      
                                                <input type="text" placeholder="Phone" name="phone" class="form-control" id="message">
                                                <label for="password" class="glyphicon glyphicon-phone-alt" rel="tooltip" title="email"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3">
                                        <div id="pass_form" class="form-group">
                                            <div class="icon-addon addon-lg">      
                                                <input type="text" placeholder="Address" name="address" class="form-control" id="message">
                                                <label for="password" class="glyphicon glyphicon-level-up" rel="tooltip" title="email"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style='margin-top: 50px;'>
                                    <div class="container-fluid" >
                                        <div class="col-lg-6 col-lg-offset-3">
                                            <button type="submit" name="submit" class="btn btn-default btn-block  login-button">SUBMIT</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </form>

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