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
        if (isset($_POST['search_submit'])) {
            $search_string = $_POST['search_string'];
            header("Location: post-list.php?search=" . $search_string);
        }
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

                    <div class="page-title text-center ">

                        <h1>Posts</h1>
                    </div>
                    <div class="clearfix"></div>    

                    <div class="add-product-button pull-left ">
                        <a class="btn btn-app" href="new-post.php">
                            <i class="fa fa-plus"></i> Add
                        </a>
                    </div>


                    <div class="clearfix"></div>



                    <script>
                        function change_category(selectObject) {
                            var category_id = selectObject.value;

                            var url = getPathFromUrl(window.location.href);

                            url += '?category_id=' + category_id;

                            window.location.href = url;


                        }

                        function getPathFromUrl(url) {

                            return url.split(/[?#]/)[0];
                        }
                    </script>


                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <form method="POST" action="post-list.php">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search_string" placeholder="Search">
                                    <span class="input-group-btn">

                                        <button class="btn btn-default" type="submit" name="search_submit">Go!</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">

                                <div class="x_content">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_GET['search'])) {
                                                $search_string = $_GET["search"];
                                                $sql_posts = "select post_id,post_title,post_date from post where post_title like '%" . $search_string . "%'";
                                            } else {

                                                $sql_posts = "select post_id,post_title,post_date from post";
                                            }


                                            $result_posts = $mysql->query($sql_posts);

                                            if ($result_posts->num_rows > 0) {
                                                while ($row = $result_posts->fetch_assoc()) {

                                                    $post_id = $row['post_id'];
                                                    $post_title = $row['post_title'];
                                                    $post_date = $row['post_date'];
                                                    ?>

                                                    <tr class="content">
                                                        <td class="uppercase" ><?php echo $post_title ?></td>
                                                        <td ><?php echo $post_date ?></td>
                                                        <td class=" last col-md-2 col-xs-2">
                                                            <a class="btn btn-app"  href="post_page.php?id=<?php echo $post_id ?>"><i class="fa fa-eye"></i> View</a>
                                                            <a class="btn btn-app"   id="delete-post-btn"   data-id="<?php echo $post_id ?>"   data-toggle="modal" data-target=".delete-product-modal"><i class="fa fa-trash-o"></i> Delete</a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    
                                     <script>

                                        $('a#delete-post-btn').click(function () {
                                            var id = $(this).data('id');
                                            $(".modal-footer #id").val(id);
                                        })


                                    </script>

                                    <div class="modal fade delete-product-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <form   method="POST" action="delete_post.php"   >
                                                    <div class="modal-header">

                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title" id="myModalLabel">Delete Post</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4>Are you sure you wanna delete this post?</h4>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" id="id" name="post_id">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


                                                        <button type="submit" class="btn btn-danger" name="delete">DELETE</button>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    if ($result_posts->num_rows > 0) {
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
                                            <h1> NO PRODUCTS </h1>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
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
